<?php

namespace App\Repositories;

use App\Question;

class QuestionRepository{

	public function all(){

		return Question::all();
	}

	public function save($data){

		return Question::create($data);
	}

	public function find($id){

		return Question::find($id);
	}

	public function update($id, $data){

		$q = Question::find($id);

		return $q->update($data);
	}

	public function delete($id){

		return Question::destroy($id);
	}
}