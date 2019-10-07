<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Formation;

use App\Repositories\FormationRepository;

class FormationsController extends Controller
{
 	protected $formations;

	public function __construct(FormationRepository $formations)
    {
		$this->formations = $formations;
	}

	public function index($type)
	{
		return view('formation.index', ['legislacion' => $this->formations->all($type), 'type' => $type]);
	}

	public function create($type)
	{
		return view('formation.create', ['type' => $type]);
	}

	public function store(Request $request, $type)
	{

		$this->validate($request, [
			'title' => 'required|min:5',
			'pdf' => 'nullable|mimes:pdf'
		]);

		$img = $request->file('image');
		$pdf = $request->file('pdf');
        $image = str_random('30').'-'.$img->getClientOriginalName();
        $file = str_random('30').'-'.$pdf->getClientOriginalName();

		$data = [

			'title'			=>		$request->title,
			'image'			=>		$image,
			'pdf'			=>		$file,
			'formation'		=>		$type
		];

        $img->move(public_path().'/images/', $image);
        $pdf->move(public_path().'/pdf/', $file);

		$this->formations->save($data);

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				$type.' agregada satisfactoriamente.'
			]
		]);

		return redirect('/dashboard/formations/'.$type);
	}

	public function edit($id, $type)
	{
		return view('formation.edit', ['legislation' => $this->formations->find($id), 'type' => $type]);
	}

	public function update(Request $request, $type, $id)
	{
		$this->validate($request, [
			'title' => 'required|min:5',
			'pdf' => 'nullable|mimes:pdf'
		]);
		
		if($request->image != ''){

            $image = $request->image;
            $img = str_random('30').'-'.$image->getClientOriginalName();

            $image->move(public_path().'/images/', $img);

        }else{

            $img = Formation::find($id)->image;
        }

        if($request->pdf != ''){

            $pdf = $request->pdf;
            $file = str_random('30').'-'.$pdf->getClientOriginalName();

            $pdf->move(public_path().'/pdf/', $file);

        }else{

            $file = Formation::find($id)->pdf;
        }

        $data = [

			'title'			=>		$request->title,
			'image'			=>		$img,
			'pdf'			=>		$file
		];

        $this->formations->update($id, $data);

      $request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				$type.' actualizada satisfactoriamente.'
			]
		]);

        return redirect('/dashboard/formations/'.$type);
    }

    public function destroy(Request $request, $type ,$id)
    {
    	$this->formations->delete($id);

        $request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				$type.' eliminada satisfactoriamente.'
			]
		]);

        return redirect('/dashboard/formations/'.$type);
    } 
}
