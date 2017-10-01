<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\School;

class AdminPageController extends Controller{
	

	public function dashboard(){
		return view('pages.admin.dashboard');
	}

	//Get and show all courses
	public function courses(){
		$courses = Course::all();
		return view('pages.admin.courses', compact('courses'));
	}

	//Get and show a specific course
	public function course($code){
		$course = Course::where('code', $code)->first();
		$schools = School::pluck('name', 'id');

		return view('pages.admin.update-course', compact('course', 'schools'));
	}

	public function updateCourse($id, Request $request){
		$course = Course::findOrFail($id);

		$input = $request->all();

		$course->fill($input)->save();

		return redirect('admin/courses');
	}


	//SCHOOLS
	public function schools(){
		$schools = School::all();
		return view('pages.admin.schools', compact('schools'));
	}

	//Get and show a specific school
	public function school($id){
		$school = School::where('id', $id)->first();
		//$schools = School::pluck('name', 'id');

		return view('pages.admin.update-school', compact('school'));
	}

	public function updateSchool($id, Request $request){
		$school = School::findOrFail($id);

		$input = $request->all();

		$school->fill($input)->save();

		return redirect('admin/schools');
	}

	public function users(){
		return view('pages.admin.courses');
	}
}