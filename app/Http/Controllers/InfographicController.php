<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Infographic;
use App\Repositories\InfographicRepository;
use Image;


class InfographicController extends Controller
{

	protected $infographic;

	public function __construct(InfographicRepository $infographic)
    {
		$this->infographic = $infographic;
	}

    public function index()
    {
    	return view('infographic.index', [
    			'infografias' => $this->infographic->all()
    		]);
    }

    public function create()
    {
    	return view('infographic.create');
    }

    public function store(Request $request)
    {
    	$img = $request->file('image'); //Imagen del formulario

    	//Imagen normal y miniatura

    	$file = str_random('30').'-'.$img->getClientOriginalName();
    	$thumbnail = Image::make($img)->fit(300,200);

    	$data = [

    		'image'		=>	$file,
    		'thumbnail'	=>	$file
    	];

    	$this->infographic->save($data);

    	//Guardado de imagen normal y miniatura

    	$img->move(public_path().'/images/', $file);
    	$thumbnail->save(public_path('/images/thumbnails/'.$file));

    	$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				'Se ha agregado la nueva infografía'
			]
		]);

		return redirect('/dashboard/infographic');
    }

    public function destroy(Request $request, $id)
    {
    	$this->infographic->delete($id);

    	$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				'Se ha eliminado la infografía'
			]
		]);

		return redirect('/dashboard/infographic');
    }
}
