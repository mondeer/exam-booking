@extends('admin.dashboard')

@section('content')
    <div class="col-md-12">
      <a class="btn btn-success btn-lg pull-right" href="/student/enroll">Enroll Student</a>
        <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th> ID </th>
                <th> First Name </th>
                <th> Middle Name </th>
                <th> Last Name </th>
                <th> National ID </th>
                <th> Date Of Birth </th>
                <th> Reg No </th>
                <th> Course </th>
                <th> Intake </th>
                <th> Mobile </th>
                <th> Address </th>
                <th> Next of Kin </th>
                <th> Next of Kin Contact </th>
              </tr>
            </thead>
            <tbody>
              @foreach($students as $student)
                <tr>
                  <td>{{$student->id}}</td>
                  <td>{{$student->first_name}}</td>
                  <td>{{$student->middle_name}}</td>
                  <td>{{$student->last_name}}</td>
                  <td>{{$student->national_id}}</td>
                  <td>{{$student->dob}}</td>
                  <td>{{$student->reg_no}}</td>
                  <td>{{$student->course}}</td>
                  <td>{{$student->intake}}</td>
                  <td>{{$student->mobile}}</td>
                  <td>{{$student->address}}</td>
                  <td>{{$student->next_of_kin}}</td>
                  <td>{{$student->next_of_kin_contact}}</td>
                  <td>
                    <form class="deletestu" action="/student/{{ $student->id }}/delete" method="post">
                      <input type="hidden" name="_method" value="delete">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection
