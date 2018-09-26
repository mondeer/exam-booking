<?php

namespace exams\Http\Controllers;

use Illuminate\Http\Request;
use exams\Patient;

class PatientCtrl extends Controller
{
    public function newPatient() {
      return view('patient.enroll');
    }

    public function enrollPatient(Request $request) {
      $patients = new Patient();
      $patients->first_name = $request->input('first_name');
      $patients->middle_name = $request->input('middle_name');
      $patients->last_name = $request->input('last_name');
      $patients->national_id = $request->input('national_id');
      $patients->dob = $request->input('dob');
      $patients->patient_id = $request->input('patient_id');
      $patients->ward = $request->input('ward');
      $patients->bed_no = $request->input('bed_no');
      $patients->mobile = $request->input('mobile');
      $patients->address = $request->input('address');
      $patients->next_of_kin = $request->input('next_of_kin');
      $patients->next_of_kin_contact = $request->input('next_of_kin_contact');
      $patients->save();

      return json_encode($patients);
    }

    public function viewPatient() {
      $patients = Patient::all();

      return view('patient.view')->with('patients', $patients);
    }
}
