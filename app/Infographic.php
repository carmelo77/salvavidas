<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infographic extends Model
{
    protected $table = 'infographic';

    protected $fillable = ['image', 'thumbnail'];
}
