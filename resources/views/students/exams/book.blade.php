@extends('students.dashboard')

@section('content')

  <div class="col-md-12">
    <div class="panel-heading"><h1>Book Exam</h1></div>

        <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
              action="{{ url('/student/exam-booking') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-1 control-label"> Exam Period </label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="exam_period" value="{{ old('exam_period') }}">
                </div>
                <label class="col-md-1 control-label"> Units Registering For</label>
                <div class="col-md-6">
                    <textarea class="form-control" name="units" placeholder="Enter Units you registering for, seperate them with coma"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary"> Book Exam</button>
                </div>
            </div>
        </form>
  </div>
@endsection
