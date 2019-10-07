<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\CoursesRepository;

class CoursesController extends Controller
{
    protected $courses;

	public function __construct(CoursesRepository $courses)
	{
	    $this->courses = $courses;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
	    return view('courses.index',[
	        'courses' => $this->courses->all()
	    ]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
	    return view('courses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|min:5',
			'description' => 'required|min:20',
	        'price' => 'required|numeric',
			'pdf' => 'nullable|mimes:pdf'
		]);

		$data = $request->all();

		array_forget($data, '_token');

		$course = $this->courses->create($data);

		$isUpdate = false;

		$data = [];

		if ($request->pdf) {
			$name = md5($course->id);

			$name = $name . '.' . $request->pdf->getClientOriginalExtension();

			$request->pdf->move(public_path() . '/pdf', $name);

			$data = array_add($data, 'pdf', $name);

			$isUpdate = true;
		}

		if ($request->image) {
			$name = md5($course->id) . rand(1,1000000000);

			$name = $name . '.' . $request->image->getClientOriginalExtension();

			$request->image->move(public_path() . '/images/courses/', $name);

			$data = array_add($data, 'image', $name);

			$isUpdate = true;
		}

		if ($isUpdate) {
			$this->courses->update($course->id, $data);
		}

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				'Se ha agregado el nuevo curso'
			]
		]);

		return redirect('/dashboard/courses');
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function edit($id)
	{
		return view('courses.edit', [
			'c' => $this->courses->find($id)
		]);
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
			'title' => 'required|min:5',
			'description' => 'required|min:20',
			'pdf' => 'nullable|mimes:pdf'
		]);

		$data = $request->all();

		array_forget($data, '_token');
		array_forget($data, '_method');
		array_forget($data, 'image');
		array_forget($data, 'pdf');

		$course = $this->courses->find($id);

		if ($request->pdf) {

			if ($course->pdf) {
				unlink(public_path() . '/pdf/' . $course->pdf);
			}

			$name = md5($course->id);

			$name = $name . '.' . $request->pdf->getClientOriginalExtension();

			$request->pdf->move(public_path() . '/pdf', $name);

			$data = array_add($data, 'pdf', $name);
		}

		if ($request->image) {

			if ($course->image != 'none.png') {
				unlink(public_path() . '/images/courses/' . $course->image);
			}

			$name = md5($course->id) . rand(1,1000000000);

			$name = $name . '.' . $request->image->getClientOriginalExtension();

			$request->image->move(public_path() . '/images/courses/', $name);

			$data = array_add($data, 'image', $name);
		}

		foreach ($data as $key => $value) {
			if ($value == null) {
				array_forget($data, $key);
			}
		}

		$this->courses->update($id, $data);

		$request->session()->flash('msg', [
			'type' => 'success',
			'messages' => [
				'Se ha modificado el curso'
			]
		]);

		return redirect('/dashboard/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
