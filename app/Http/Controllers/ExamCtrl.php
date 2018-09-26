<?php

namespace exams\Http\Controllers;

use Illuminate\Http\Request;
use exams\Exam;
use Sentinel;
use exams\Student;

class ExamCtrl extends Controller
{
    public function index()
    {
      return view('students.exams.book');
    }

    public function bookExam(Request $request)
    {
      $exam = new Exam();
      $user = Sentinel::getUser()->email;
      $student = Student::where('address', $user)->get()->first();

      $exam->reg_no = $student->reg_no;
      $exam->exam_period = $request->input('exam_period');
      $exam->units = $request->input('units');
      $exam->status = 'pending';
      $exam->save();

      return redirect('/student/exam-bookings/view');
    }

    public function viewBookings()
    {
      $user = Sentinel::getUser()->email;
      $student = Student::where('address', $user)->get()->first();

      $exams = Exam::where('reg_no', $student->reg_no)->get();

      return view('students.exams.view')->with('exams', $exams);
    }

    public function adminView()
    {
      $exams = Exam::all();

      return view('admin.exams.bookings')->with('exams', $exams);
    }

    public function approve($id)
    {
      $exams = Exam::findOrFail($id);

      $exams->status = 'approved';
      $exams->save();

      return redirect()->back();
    }

    public function destroy($id)
    {
      $exam = Exam::findOrFail($id);

      $exam->delete();

      return redirect()->back();
    }
}
