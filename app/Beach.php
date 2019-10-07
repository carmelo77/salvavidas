<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beach extends Model
{
    protected $table = 'beach';

    protected $fillable = ['name', 'location'];
}
