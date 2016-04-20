<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\User;
use Storage;
use Illuminate\Support\Facades\File;
use Auth;
use Image;
use Validator;
use Session;
use Redirect;



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
  if($request->file('profile_img') !== null) {

      $p_img = $request->file('profile_img');
          // $img = Image::make($p_img);
          // $img->resize(300, 200);
      $p_imageName = rand(11111,99999).'-'.$p_img->getClientOriginalName();
      $p_img->move(public_path('uploads/profile_imgs'), $p_imageName);
      $user->profile_img = '/uploads/profile_imgs/' .  $p_imageName;
    }

    //-----Skills Imgs-----

    // // getting all of the post data
    $files = $request->file('skills_imgs');
    // Making counting of uploaded images
    $file_count = count($files);
    // start count how many uploaded
    $uploadcount = 0;
    $tempSkills = "";

    // foreach($files as $file) {
    //   $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
    //   $validator = Validator::make(array('file'=> $file), $rules);
    //   if($validator->passes()){
    //     $destinationPath = 'uploads/skills_imgs';
    //     $filename = rand(11111,99999).'-'.$file->getClientOriginalName();
    //     $upload_success = $file->move($destinationPath, $filename);
    //
    //     $tempSkills .= $filename;
    //     $uploadcount ++;
    //     if($uploadcount < $file_count){
    //       $tempSkills .= ',';
    //     }
    //
    //   }
    // }
    //
    // $user->skills_img = $tempSkills;
    //
    // if($uploadcount == $file_count){
    //   Session::flash('success', 'Upload successfully');
    //   return Redirect::to('user_profile');
    // }
    // else {
    //   return Redirect::to('edit_profile')->withInput()->withErrors($validator);
    // }



// $skillArray = explode(",",$user->skil)

  // Skills Images
  if($request->file('skills_imgs') !== null) {
  $s_imageName = rand(11111,99999).'-'.$request->file('skills_imgs')->getClientOriginalName();
  $request->file('skills_imgs')->move(public_path('uploads/skills_imgs'), $s_imageName);
  $user->skills_img = '/uploads/skills_imgs/' . $s_imageName;
  }

//}

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

  return Redirect::to('user_profile');

//  return view('frontend.user_profile', ["user" => $user]);

}
}
