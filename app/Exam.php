<?php

namespace exams;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = ['reg_no',
                            'exam_period',
                            'units',
                            'status'];
}
