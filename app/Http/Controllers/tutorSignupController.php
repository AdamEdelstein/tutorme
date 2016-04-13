<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class tutorSignupController extends Controller
{
  public function index() {
      return view('frontend.tutor_signup');
  }

  public function getUsers(Request $request) {

    $users = new users_table;
    $users->first_name = $request->first_name;
    $users->save();

    return view('frontend.user_profile');

}


}
