<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	/**
	 * Teacher Subject relationship
	 */
    public function teachers() {
    	return $this->belongsToMany('App\Teacher', 'subject_teacher');
    }
}
