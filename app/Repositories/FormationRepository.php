<?php

namespace App\Repositories;

use App\Formation;

class FormationRepository {

	public function all($type){

		return Formation::where('formation', $type)->get();
	}

	public function save($data){

		return Formation::create($data);
	}

	public function find($id){

		return Formation::find($id);
	}

	public function update($id, $data){

		$f = Formation::find($id);
		return $f->update($data);
	}	

	public function delete($id){

		Formation::destroy($id);
	}
}
