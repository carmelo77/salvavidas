<?php
namespace App\Repositories;

use App\Course;

class CoursesRepository
{
	
	function all()
	{
		return Course::all();
	}

	public function create($data)
	{
		return Course::create($data);
	}

	public function find($id)
	{
		return Course::find($id);
	}

	public function update($id, $data)
	{
		$course = Course::find($id);

		$course->update($data);

		return $course;
	}
}