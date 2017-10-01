<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Quick Edit</h4>
      </div>
      <div class="modal-body">
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
              {{-- <div class="col-md-4">
                  <div class="form-group">
                      {{ Form::label('school', 'School') }}
                      {{ Form::text('school', null, array('class' => 'form-control')) }}
                  </div>
              </div> --}}
          </div>
          {{ Form::submit('Update Course', array('class' => 'btn btn-info btn-fill btn-block')) }}
          <div class="clearfix"></div>

          {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>
</div>