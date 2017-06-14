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

    /**
     * Student Subject Relationship
     * returns student results
     */
    
    public function students() {
    	return $this->belongsToMany('App\Student', 'results');
    }
}
