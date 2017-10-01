@extends('layouts.admin')

@section('navbar-page-header')
    <a class="navbar-brand" href="courses">{{ $course->code }}</a>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Update Course</h4>
                </div>
                <div class="content">
                    {!! Form::model($course, ['route' => ['course.update', $course->id]]) !!}

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::label('code', 'Code') }}
                                {{ Form::text('code', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('school_id', 'School') }}
                                {{ Form::select('school_id', $schools, null, array('class' => 'form-control'))}}
                                {{-- {{ Form::text('school_id', null, array('class' => 'form-control')) }} --}}
                            </div>
                        </div>
                    </div>
                    {{ Form::submit('Update Course', array('class' => 'btn btn-info btn-fill btn-block')) }}
                    {{-- <button type="submit" class="btn btn-info btn-fill btn-block">Update Profile</button> --}}
                    <div class="clearfix"></div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection