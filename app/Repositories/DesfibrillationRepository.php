<?php

namespace App\Repositories;

use App\Desfibrillation;

class DesfibrillationRepository {

	public function all(){

		return Desfibrillation::all();

	}

	public function save($data){

		return Desfibrillation::create($data);
	}

	public function find($id)
	{	
		return Desfibrillation::find($id);
	}

	public function update($id, $data){

		$u = $this->find($id);
		$u->update($data);
	}

	public function delete($id){

		return Desfibrillation::destroy($id);
	}
}