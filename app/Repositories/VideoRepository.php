<?php

namespace App\Repositories;

use App\Video;

class VideoRepository{

	public function index(){

		return Video::all();
	}

	public function save($data){

		return Video::create($data);
	}

	public function view()
	{
		return Video::orderBy('id', 'desc')->get();
	}

	public function edit($id){

		return Video::find($id);
	}

	public function update($id, $data){	

		$vid = Video::find($id);
		return $vid->update($data);
	}

	public function delete($id){

		Video::destroy($id);
	}

	public function last()
	{
		return Video::all()->last();
	}

}