<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class tutorSignupController extends Controller
{
  public function index() {
      return view('frontend.tutor_signup');
  }

  public function gotTutors(Request $request) {

    // $tutor = new tutors;
    // $tutor->first_name = $request->first_name;
    //
    // $tutor->save();
}

}
