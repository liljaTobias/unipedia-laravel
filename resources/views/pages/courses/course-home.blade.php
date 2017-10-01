@extends('layouts.coursepage')

@section('navbar-page-header')
    <a class="navbar-brand" href="courses">Courses</a>
@endsection

@section('content')

	<header class="intro-header" style="background-image: url('/img/background-city-color.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1 style="text-transform: uppercase;">{{ $course->name }}</h1>
                        <hr class="small">
                        <span class="subheading">{{ $course->school()->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

	<div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach($course->posts() as $post)
            	<div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            {{ $post->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $post->content }}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on {{ $post->created_at }}</p>
                </div>
                <hr>

            	@endforeach
            </div>
        </div>
@endsection