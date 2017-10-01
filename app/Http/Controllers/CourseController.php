<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Course;

class CourseController extends Controller{
	
	public function findCourse($code){
		return view('layouts.coursepage');
	}

	public function course($code){
		$course = Course::where('code', $code)->first();
		//$posts = Post::where('course_id', $course->id)->all();

		return view('pages.courses.course-home', compact('course'));
	}
}