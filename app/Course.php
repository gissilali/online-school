<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    const ACTIVE = 'Active';
    const INACTIVE = 'Inactive';

    protected $fillable = ['name','code','alias','status','updated_user_id','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function updatedby()
    {
        return $this->belongsTo(User::class,'updated_user_id','id');
    }
}
