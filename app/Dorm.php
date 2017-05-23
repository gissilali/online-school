<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dorm extends Model
{
	protected $fillable = ['name'];

	/**
     * Student Dorm Relationship
     */
	public function students() {
		return $this->hasMany('App\Student');
	}
}
