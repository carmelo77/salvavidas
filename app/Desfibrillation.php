<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desfibrillation extends Model
{
    protected $table = 'desfibrillation';

    protected $fillable = ['name', 'photo'];
}
