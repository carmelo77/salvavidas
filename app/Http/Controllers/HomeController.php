<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\CoursesRepository;

use Auth;

class HomeController extends Controller
{
	protected $courses;

	public function __construct(CoursesRepository $courses)
	{
		$this->courses = $courses;
	}

	public function root()
	{
		return view('index');
	}

	public function showLogin()
	{
		return view('login');
	}

	public function signIn(Request $request)
	{
		$this->validate($request, [
			'username' => 'required|min:3',
			'password' => 'required|min:3',
		]);

		$data = $request->all();

		array_forget($data, '_token');

		if (Auth::attempt($data)) {
			return redirect('/dashboard');
		}

		$request->session()->flash('msg', [
			'type' => 'warning',
			'msg' => [
				'Usuario o Contraseña Incorrectos'
			]
		]);

		return back();
	}

	public function dashboard()
	{
		return view('index-dashboard');
	}

	public function catalogo()
	{
		return view('front.courses', [
			'courses' => $this->courses->all()
		]);
	}

	public function soy()
	{
		return view('desfibrillation.show');
	}
}