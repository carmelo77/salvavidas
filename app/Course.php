<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
    	'title',
    	'description',
    	'image',
    	'pdf',
    	'video',
    	'url_blog',
    	'price',
    ];
}
