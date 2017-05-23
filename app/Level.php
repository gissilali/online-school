<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['class', 'value'];

    public function students() {
    	return $this->hasMany('App\Student');
    }
}
