@extends('admin.dashboard')

@section('content')

  <div class="col-md-12">
    <div class="panel-heading"><h1>Enroll Student</h1></div>


        <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
              action="{{ url('/student/enroll') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-1 control-label"> First Name</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                </div>
                <label class="col-md-1 control-label"> Middle Name</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}">
                </div>
                <label class="col-md-1 control-label"> Last Name</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-1 control-label">National ID</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="national_id" value="{{ old('national_id') }}">
                </div>
                <label class="col-md-1 control-label"> Gender</label>
                <div class="col-md-3">
                    <select class="form-control" name="gender">
                      <option></option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                </div>
                <label class="col-md-1 control-label">Date of Birth</label>
                <div class="col-md-3">
                    <input type="date" class="form-control" placeholder="Y-M-D" name="dob" value="{{ old('dob') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-1 control-label"> Student Reg.No </label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="reg_no" value="{{ old('reg_no') }}">
                </div>
                <label class="col-md-1 control-label"> Course </label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="course" value="{{ old('course') }}">
                </div>
                <label class="col-md-1 control-label"> Intake </label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="intake" value="{{ old('intake') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-1 control-label">Mobile Number</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}">
                </div>
                <label class="col-md-1 control-label">Postal Address</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                </div>
                <label class="col-md-1 control-label">Next Of Kin</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="next_of_kin" value="{{ old('next_of_kin') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-1 control-label">Next Of Kin Contact</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="next_of_kin_contact" value="{{ old('next_of_kin_contact') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary"> Enroll Student</button>
                </div>
            </div>
        </form>

  </div>

@endsection
