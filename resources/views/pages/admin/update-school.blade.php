@extends('layouts.admin')

@section('navbar-page-header')
    <a class="navbar-brand" href="courses">{{ $school->name }}</a>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Update School</h4>
                </div>
                <div class="content">
                    {!! Form::model($school, ['route' => ['school.update', $school->id]]) !!}

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::label('country', 'Country') }}
                                {{ Form::text('country', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                    </div>
                    {{ Form::submit('Update School', array('class' => 'btn btn-info btn-fill btn-block')) }}
                    {{-- <button type="submit" class="btn btn-info btn-fill btn-block">Update Profile</button> --}}
                    <div class="clearfix"></div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection