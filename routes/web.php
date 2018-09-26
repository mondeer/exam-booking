<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', 'RegisterCtrl@register');

Route::post('/register', 'RegisterCtrl@postRegister');

Route::post('/login', 'LoginCtrl@login');

Route::post('/logout', 'LoginCtrl@login');

Route::get('/dashboard', function (){
  return view('admin.dashboard');
});

// students routes
Route::get('/student/dashboard', function (){
  return view('students.dashboard');
});

Route::get('/student/enroll', 'StudentCtrl@index');

Route::post('/student/enroll', 'StudentCtrl@store');

Route::get('/students/view', 'StudentCtrl@show');

Route::delete('/student/{id}/delete', 'StudentCtrl@destroy');

// students exam bookings

Route::get('/student/exam-booking', 'ExamCtrl@index');

Route::post('/student/exam-booking', 'ExamCtrl@bookExam');

Route::get('/student/exam-bookings/view', 'ExamCtrl@viewBookings');

// admin exam view
Route::get('/admin/exam-bookings/view', 'ExamCtrl@adminView');

Route::put('/admin/exam-booking/{id}/approve', 'ExamCtrl@approve');

Route::delete('/admin/exam-booking/{id}/delete', 'ExamCtrl@destroy');
