<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   	protected $fillable = ['title', 'content', 'course_id', 'user_id'];

   	public function course(){
   		return $this->belongsTo('App\Course')->first();
   	}
}
