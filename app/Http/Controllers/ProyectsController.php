<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ProyectsRepository;

class ProyectsController extends Controller
{
	protected $proyects;

	public function __construct(ProyectsRepository $proyects)
	{
		$this->proyects = $proyects;
	}

	public function dashboardIndex($type)
	{
		return view('proyects.dashboard.index',[
			'type' => $type,
			'data' => $this->proyects->byProyect($type)
		]);
	}

	public function create($type)
	{
		return view('proyects.dashboard.create',[
			'type' => $type,
		]);
	}

	public function store(Request $request, $type)
	{
		$this->validate($request, [
			'image' => 'required|mimes:jpg,jpeg,bpm,png',
			'url' => 'required|url'
		]);

		$data = $request->all();

		array_forget($data, '_token');
		array_forget($data, 'image');

		$data = array_add($data, 'proyect', $type);

		$proyect = $this->proyects->create($data);

		$name = md5($proyect->id) . rand(1,1000000000);

		$name = $name . '.' . $request->image->getClientOriginalExtension();

		$request->image->move(public_path() . '/images/proyects/', $name);

		$this->proyects->update($proyect->id, [
			'image' => $name
		]);

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				'Se ha agregado correctamente'
			]
		]);

		return redirect('/dashboard/proyects/' . $type);
	}

	public function edit($type, $id)
	{
		$proyect = $this->proyects->find($id);

		return view('proyects.dashboard.edit', [
			'proyect' => $proyect,
			'type' => $type
		]);
	}

	public function update(Request $request, $type, $id)
	{
		$this->validate($request, [
			'url' => 'required|url'
		]);

		$data = $request->all();

		array_forget($data, '_token');
		array_forget($data, '_method');
		array_forget($data, 'image');

		$proyect = $this->proyects->find($id);

		if ($request->image) {

			if ($proyect->image != 'none.png') {
				unlink(public_path() . '/images/proyects/' . $proyect->image);
			}

			$name = md5($id) . rand(1,1000000000);

			$name = $name . '.' . $request->image->getClientOriginalExtension();

			$request->image->move(public_path() . '/images/proyects/', $name);

			$data = array_add($data, 'image', $name);
		}

		$this->proyects->update($id, $data);

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				'Se ha modificado correctamente'
			]
		]);

		return redirect('/dashboard/proyects/' . $type);
	}
}