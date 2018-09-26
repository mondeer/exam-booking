<?php

namespace exams;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
      protected $fillable = ['first_name', 'middle_name', 'last_name', 'national_id', 'gender', 'dob', 'reg_no', 'course',
                             'intake', 'mobile', 'address', 'next_of_kin', 'next_of_kin_contact'];
}
