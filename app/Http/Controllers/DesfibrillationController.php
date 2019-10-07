<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Desfibrillation;

use App\Repositories\DesfibrillationRepository;


class DesfibrillationController extends Controller
{
    protected $desfibrillation;

	public function __construct(DesfibrillationRepository $desfibrillation)
    {
		$this->desfibrillation = $desfibrillation;
	}

	public function index()
	{
		return view('desfibrillation.index', ['desfibrillation' => $this->desfibrillation->all()]);
	}

	public function create()
	{
		return view('desfibrillation.create');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'photo' => 'required'
			]);

		$img = $request->file('photo');
		$image = str_random('30').'-'.$img->getClientOriginalName();

		$data = [

			'name'			=>		$request->name,
			'photo'			=>		$image
		];

		$img->move(public_path().'/images/desfibrillation/', $image);

		$this->desfibrillation->save($data);

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				 ' Desfibrilador agregado satisfactoriamente.'
			]
		]);

		return redirect('/dashboard/desfibrillation');

	}

	public function edit($id)
	{
		return view('desfibrillation.edit', ['d' => $this->desfibrillation->find($id)]);
	}

	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'name' => 'required'
			]);

		if($request->photo != ''){
			$img = $request->file('photo');
			$image = str_random('30').'-'.$img->getClientOriginalName();
			$img->move(public_path().'/images/desfibrillation/', $image);
		}else{

			$image = Desfibrillation::find($id)->photo;
		}

		$data = [

			'name'			=>		$request->name,
			'photo'			=>		$image
		];

		$this->desfibrillation->update($id, $data);

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				 ' Desfibrilador actualizado satisfactoriamente.'
			]
		]);

		return redirect('/dashboard/desfibrillation');

	}

	public function destroy(Request $request, $id)
	{
		$this->desfibrillation->delete($id);

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				'Desfibrilador eliminado satisfactoriamente.'
			]
		]);

		return redirect('/dashboard/desfibrillation/');
	}
}
