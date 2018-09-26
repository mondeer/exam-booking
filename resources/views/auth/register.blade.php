@extends('layouts.app')

@section('content')

<div data-wow-offset="0" data-wow-delay="0.1s">
  <br><br>
<h2 class="h-ultra imondwhite">Register To the System</h2>
</div>
<div class="" data-wow-offset="0" data-wow-delay="0.1s">
<h4 class="h-light imondwhite">Provide Details</h4>
</div>
  <div class="well">
  <form class="form-horizontal" role="form" method="POST" action="/register">
      {{ csrf_field() }}

      @if( session('error') )
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
      @endif

      <div class="form-group">
          <label for="name" class="col-md-4 control-label">First Name</label>

          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
          </div>
      </div>

      <div class="form-group">
          <label for="name" class="col-md-4 control-label">Last Name</label>

          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
          </div>
      </div>

      <div class="form-group">
          <label for="email" class="col-md-4 control-label">E-Mail Address</label>

          <div class="col-md-6">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
          </div>
      </div>

      <div class="form-group">
          <label class="col-md-4 control-label">User Role</label>
          <div class="col-md-4">
            <select class="form-control" name="role">
              <option></option>
              <option value="admin"> Admin</option>
              <option value="student"> Student</option>
            </select>
          </div>
      </div>

      <div class="form-group">
          <label for="password" class="col-md-4 control-label">Password</label>

          <div class="col-md-6">
              <input id="password" type="password" class="form-control" name="password" required>

          </div>
      </div>


      <div class="form-group">
          <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

          <div class="col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>
      </div>

      <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                  Register
              </button>
              <a class="btn btn-success" href="/">
                  Login
              </a>
          </div>
      </div>
  </form>

</div>

@endsection
