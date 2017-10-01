<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $fillable = ['name', 'code', 'school_id'];
    
    public function school(){
    	return $this->belongsTo('App\School')->first();
    }

    public function posts(){
    	return $this->hasMany('App\Post')->get();
    }
}
