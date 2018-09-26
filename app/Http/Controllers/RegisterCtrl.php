<?php

namespace exams\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegisterCtrl extends Controller
{
    public function register() {
      return view('auth.register');
    }

    public function postRegister(Request $request) {
      $user = Sentinel::registerAndActivate([
        'email'=>$request->input('email'),
        'password'=>$request->input('password'),
        'first_name'=>$request->input('first_name'),
        'last_name'=>$request->input('last_name'),
      ]);

      $system = Sentinel::findRoleBySlug('admin');
      $student = Sentinel::findRoleBySlug('student');

      $role = $request->input('role');

      if($role =='admin'){
        $system->users()->attach($user);
      }
      elseif($request->input('role')=='student'){
        $student->users()->attach($user);
      }

      return redirect('/');
    }
}
