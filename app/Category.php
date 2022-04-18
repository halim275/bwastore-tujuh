<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;

	protected $fiilable = [
		'name', 'photo', 'slug'
	];

	protected $hidden = [];
}
