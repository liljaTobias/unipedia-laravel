<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['name', 'country'];

    public function courses(){
    	return $this->hasMany('App\Course');
    }
}
