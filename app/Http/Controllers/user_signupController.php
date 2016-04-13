<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\users;
use Storage;
use Illuminate\Support\Facades\File;


class user_signupController extends Controller
{
  public function index() {
      return view('frontend.user_signup');
  }

  public function getUsers(Request $request) {

    // Writing information from the user_signup form to the users_table model
    $users = new users;
    $users->first_name = $request->first_name;
    $users->last_name = $request->last_name;
    $users->email = $request->email;
    $users->city = $request->city;
    $users->price = $request->price;

    // Profile Image
    $p_imageName = rand(11111,99999).'-'.$request->file('profile_img')->getClientOriginalName();

        $request->file('profile_img')->move(
            base_path() . '/public/uploads/profile_imgs', $p_imageName
        );
    $users->profile_img = base_path() . '/public/uploads/profile_imgs/' . $p_imageName;


    // Skills Images
    $s_imageName = rand(11111,99999).'-'.$request->file('skills_imgs')->getClientOriginalName();

        $request->file('skills_imgs')->move(
            base_path() . '/public/uploads/skills_imgs', $s_imageName
        );
    $users->skills_img = base_path() . '/public/uploads/skills_imgs/' . $s_imageName;

    // $p_img = Image::make($users->profile_img);
    // $p_img->resize(300, null, function ($constraint) {
    //   $constraint->aspectRatio();
    // });


    // Profile Image
    // $myFile = $request->file("profile_img")->getRealPath();
    // $fileToMove = file_get_contents($myFile);
    //
    // Storage::put($fileToMove, public_path("uploads"));


    //  Check to see if Checkboxes were enabled
    if($request->online_lessons_bool == 'yes' )
    {
      $users->online_lessons_bool = 1;
    } else {
      $users->online_lessons_bool = 0;
    }

    if($request->alt_payment_bool == 'yes' )
    {
      $users->alt_payment_bool = 1;
    } else {
      $users->alt_payment_bool = 0;
    }

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
