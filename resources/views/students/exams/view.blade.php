@extends('students.dashboard')

@section('content')
    <div class="col-md-10">
      <a class="btn btn-success btn-lg pull-right" href="/student/exam-booking">Book Exam</a>
        <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th> ID </th>
                <th> Exam Period </th>
                <th> Units </th>
                <th> Status </th>
              </tr>
            </thead>
            <tbody>
              @foreach($exams as $exam)
                <tr>
                  <td>{{$exam->id}}</td>
                  <td>{{$exam->exam_period}}</td>
                  <td>{{$exam->units}}</td>
                  @if($exam->status == 'approved')
                    <td><span class="badge" style="background: green;">{{$exam->status}}</span></td>
                  @else
                    <td><span class="badge" style="background: #f20000;">{{$exam->status}}</span></td>
                  @endif
                  <td>
                    <form class="deletestu" action="/student/exam-booking/{{ $exam->id }}/delete" method="post">
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
