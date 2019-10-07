<?php
namespace App\Repositories;

use App\Proyect;

class ProyectsRepository
{
	
	function all()
	{
		return Proyect::all();
	}

	public function create($data)
	{
		return Proyect::create($data);
	}

	public function find($id)
	{
		return Proyect::find($id);
	}

	public function update($id, $data)
	{
		$proyect = Proyect::find($id);

		$proyect->update($data);

		return $proyect;
	}

	public function byProyect($type)
	{
		return Proyect::where('proyect', $type)->get();
	}
}