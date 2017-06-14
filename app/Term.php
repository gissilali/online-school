<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    public function results(){
    	return $this->hasMany('App\Result');
    }
}
