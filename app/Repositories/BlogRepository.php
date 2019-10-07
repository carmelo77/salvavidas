<?php

namespace App\Repositories;

use App\Blog;

class BlogRepository{

	public function index(){

		return Blog::all();
	}

	public function save($data){

		return Blog::create($data);
	}

	public function edit($id){

		return Blog::find($id);
	}

	public function update($id, $data){

		$u = Blog::find($id);

		return $u->update($data);
	}

	public function delete($id){

		Blog::destroy($id);
	}
}