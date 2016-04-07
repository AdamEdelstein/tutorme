<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\users_table;



class user_signupController extends Controller
{
  public function index() {
      return view('frontend.user_signup');
  }

  public function getUsers(Request $request) {

    $users = new users_table;
    $users->first_name = $request->first_name;
    $users->last_name = $request->last_name;
    $users->email = $request->email;
    $users->city = $request->city;
    $users->price = $request->price;
    $users->online_lessons_bool = $request->online_lessons_bool;
    $users->alt_payment_bool = $request->alt_payment_bool;
    $users->alt_payments = $request->alt_payments;
    $users->availability = $request->availability;
    $users->skills_learn = $request->skills_learn;
    $users->skills_teach = $request->skills_teach;
    $users->facebook = $request->facebook;
    $users->instagram = $request->instagram;
    $users->twitter = $request->twitter;
    $users->youtube = $request->youtube;
    $users->skype = $request->skype;
    $users->save();

    return view('frontend.user_profile');

}


}
