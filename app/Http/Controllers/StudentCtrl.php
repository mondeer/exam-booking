<?php

namespace exams\Http\Controllers;

use Illuminate\Http\Request;
use exams\Student;
use Sentinel;

class StudentCtrl extends Controller
{

    public function index()
    {
        return view('admin.student.enroll');
    }

    public function store(Request $request)
    {
      $student = new Student();
      $student->first_name = $request->input('first_name');
      $student->middle_name = $request->input('middle_name');
      $student->last_name = $request->input('last_name');
      $student->national_id = $request->input('national_id');
      $student->gender = $request->input('gender');
      $student->dob = $request->input('dob');
      $student->reg_no = $request->input('reg_no');
      $student->course = $request->input('course');
      $student->intake = $request->input('intake');
      $student->mobile = $request->input('mobile');
      $student->address = $request->input('address');
      $student->next_of_kin = $request->input('next_of_kin');
      $student->next_of_kin_contact = $request->input('next_of_kin_contact');
      $student->save();

      $user = Sentinel::registerAndActivate([
        'email'=>$request->input('address'),
        'password'=>$request->input('reg_no'),
        'first_name'=>$request->input('first_name'),
        'last_name'=>$request->input('last_name'),
      ]);

      $stu = Sentinel::findRoleBySlug('student');
      $stu->users()->attach($user);

      return redirect('/students/view');
    }

    public function show()
    {
        $students = Student::all();

        return view('admin.student.view')->with('students', $students);
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('admin.student.edit')->with('student', $student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->reg_no = $request->input('reg_no');
        $student->course = $request->input('course');
        $student->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return redirect()->back();
    }
}
