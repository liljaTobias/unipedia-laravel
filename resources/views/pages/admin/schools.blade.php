@extends('layouts.admin')

@section('navbar-page-header')
    <a class="navbar-brand" href="courses">Schools</a>
@endsection

@section('nav')

<ul class="nav">
    <li>
        <a href="dashboard">
            <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
            Dashboard
        </a>
    </li>

    <li class="active">
        <a href="courses">
            <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
            Courses
        </a>
    </li>
</ul>

@endsection

@section('content')

    
    {{-- Table over all courses --}}
    <div class="row">
        <div class="panel panel-default">
            <table class="table table-hover table-striped">
                <thead>
                    <td>#</td>
                    <td>Name</td>
                    <td>Country</td>
                    <td>Created</td>
                    <td>Updated</td>
                </thead>
                <tbody>
                    @foreach($schools as $school)
                    <tr>
                        <td>{{ $school->id }}</td>
                        <td><a href="/school/{{$school->id}}">{{ $school->name }}</a></td>
                        <td>{{ $school->country }}</td>
                        <td>{{ $school->created_at }}</td>
                        <td>{{ $school->update_at }}</td>
                        {{-- <td><a id="quickEditBtn" href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data_value="{{ $course }}"></span></a></td> --}}
                        <td><a href="school/{{ $school->id }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                        <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection