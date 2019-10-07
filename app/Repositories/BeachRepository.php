<?php

namespace App\Repositories;

use App\Beach;

class BeachRepository{

	public function all(){
		
		return Beach::all();
	}

	public function save($data){

		return Beach::create($data);
	}

	public function find($id){

		return Beach::find($id);
	}

	public function update($id, $data){

		$b = Beach::find($id);

		return $b->update($data);
	}

	public function delete($id){

		return Beach::destroy($id);
	}
}