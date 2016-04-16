<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\User;
use Storage;
use Illuminate\Support\Facades\File;
use Auth;


class edit_profileController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index() {
      return view('frontend.edit_profile');
  }


  public function getUsers(Request $request) {

    // Writing information from the user_signup form to the users_table model
/*    DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(array(
              'city' => $request->city,
            ));
*/
  $user = User::find(Auth::user()->id);
  $user->city = $request->city;
  $user->price = $request->price;

  // Profile Image
  if($request->file('profile_img') !== null){
  $p_imageName = rand(11111,99999).'-'.$request->file('profile_img')->getClientOriginalName();

      $request->file('profile_img')->move(public_path('uploads/profile_imgs'), $p_imageName);

  $user->profile_img = '/uploads/profile_imgs/' .  $p_imageName;
  }

  // Skills Images
  if($request->file('skills_imgs') !== null) {
  $s_imageName = rand(11111,99999).'-'.$request->file('skills_imgs')->getClientOriginalName();

      $request->file('skills_imgs')->move(public_path('uploads/skills_imgs'), $s_imageName);

  $user->skills_img = '/uploads/skills_imgs/' . $s_imageName;

}

  if($request->online_lessons_bool == 'yes' )
  {
    $user->online_lessons_bool = 1;
  } else {
    $user->online_lessons_bool = 0;
  }

  if($request->alt_payment_bool == 'yes' )
  {
    $user->alt_payment_bool = 1;
  } else {
    $user->alt_payment_bool = 0;
  }

  $user->alt_payments = $request->alt_payments;
  $user->availability = $request->availability;
  $user->skills_learn = $request->skills_learn;
  $user->skills_teach = $request->skills_teach;
  $user->facebook = $request->facebook;
  $user->instagram = $request->instagram;
  $user->twitter = $request->twitter;
  $user->youtube = $request->youtube;
  $user->skype = $request->skype;


  $user->save();


  return view('frontend.user_profile');

}

public function upload() {



  // // getting all of the post data
  // $file = array('profile_image' => Input::file('profile_image');
  // // setting up rules
  // $rules = array('profile_image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  // // doing the validation, passing post data, rules and the messages
  // $validator = Validator::make($file, $rules);
  // if ($validator->fails()) {
  //   // send back to the page with the input data and errors
  //   return Redirect::to('user_signup')->withInput()->withErrors($validator);
  // }
  // else {
  //   // checking file is valid.
  //   if (Input::file('profile_image')->isValid()) {
  //     $destinationPath = public_path("uploads"); // upload path
  //     $extension = Input::file('profile_image')->getClientOriginalExtension(); // getting image extension
  //     $fileName = rand(11111,99999).'.'.$extension; // renameing image
  //     Input::file('profile_image')->move($destinationPath, $fileName); // uploading file to given path
  //     // sending back with message
  //     Session::flash('success', 'Upload successfully');
  //     return Redirect::to('user_signup');
  //   }
  //   else {
  //     // sending back with error message.
  //     Session::flash('error', 'uploaded file is not valid');
  //     return Redirect::to('user_signup');
  //   }
  // }
}
}
