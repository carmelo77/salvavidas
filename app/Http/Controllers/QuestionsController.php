<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Question;
use App\Repositories\QuestionRepository;

class QuestionsController extends Controller
{
    protected $questions;

	public function __construct(QuestionRepository $questions)
    {
		$this->questions = $questions;
	}

	public function index()
	{
		return view('questions.index', ['question' => $this->questions->all()]);
	}

	public function create()
	{
		return view('questions.create');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'question' => 'required',
			'answer' => 'required'
		]);

		$data = [

			'question'			=>		$request->question,
			'answer'			=>		$request->answer
		];

		$this->questions->save($data);

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				'Pregunta y Respuesta agregada satisfactoriamente.'
			]
		]);

		return redirect('/dashboard/questions/');
	}

	public function edit($id)
	{
		return view('questions.edit', ['q' => $this->questions->find($id)]);
	}

	public function update($id, Request $request)
	{
		$this->validate($request, [
			'question' => 'required',
			'answer' => 'required'
		]);

		$data = [

			'question'			=>		$request->question,
			'answer'			=>		$request->answer
		];

		$this->questions->update($id, $data);

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				'Pregunta y Respuesta actualizada satisfactoriamente.'
			]
		]);

		return redirect('/dashboard/questions/');
	}

	public function destroy($id, Request $request)
	{
		$this->questions->delete($id);

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				'Pregunta y Respuesta eliminada satisfactoriamente.'
			]
		]);

		return redirect('/dashboard/questions/');
	}

}
