<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Beach;
use App\Repositories\BeachRepository;

class BeachsController extends Controller{

	protected $beachs;

	public function __construct(BeachRepository $beachs)
    {
		$this->beachs = $beachs;
	}

    public function index()
    {
    	return view('beachs.index', ['beach' => $this->beachs->all()]);
    }

    public function create()
    {
    	return view('beachs.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
			'name' => 'required',
			'location' => 'required'
		]);

		$data = [

			'name'			=>		$request->name,
			'location'		=>		$request->location
		];

		$this->beachs->save($data);

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				'Playa agregada satisfactoriamente.'
			]
		]);

		return redirect('/dashboard/beach/');
    }

    public function edit($id)
    {
    	return view('beachs.edit', ['b' => $this->beachs->find($id)]);
    }

    public function update($id, Request $request)
    {
    	$this->validate($request, [
			'name' => 'required',
			'location' => 'required'
		]);

		$data = [

			'name'			=>		$request->name,
			'location'		=>		$request->location
		];

		$this->beachs->update($id, $data);

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				'Playa actualizada satisfactoriamente.'
			]
		]);

		return redirect('/dashboard/beach/');

    }

    public function destroy($id, Request $request)
    {
    	$this->beachs->delete($id);

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				'Playa eliminada satisfactoriamente.'
			]
		]);

		return redirect('/dashboard/beach/');
    }
}
