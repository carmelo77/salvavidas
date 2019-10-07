<?php

namespace App\Repositories;

use App\Infographic;

class InfographicRepository {

	public function all(){

		return Infographic::all();
	}

	public function save($data){

		return Infographic::create($data);
	}

	public function delete($id){

		return Infographic::destroy($id);
	}
}