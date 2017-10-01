<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return redirect('/search');
});

/*---Frontpage--*/
Route::get('search', function(){
	return view('layouts.frontpage');
});

/*--Courses--*/
Route::get('course/{code}', 'CourseController@course');

/*--Admin-area--*/
Route::get('admin/dashboard', 'Admin\AdminPageController@dashboard');
Route::get('admin/courses', 'Admin\AdminPageController@courses');
Route::get('admin/schools', 'Admin\AdminPageController@schools');
Route::get('admin/users', 'Admin\AdminPageController@users');
Route::get('admin/{code}', 'Admin\AdminPageController@course');
Route::get('admin/school/{id}', 'Admin\AdminPageController@school');

Route::post('admin/{code}',[
	'as' => 'course.update',
	'uses' => 'Admin\AdminPageController@updateCourse'
]);

Route::post('admin/school/{id}',[
	'as' => 'school.update',
	'uses' => 'Admin\AdminPageController@updateSchool'
]);

/*--Authentication--*/