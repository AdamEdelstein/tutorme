<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// tutors

// Route::get('tutor', 'tutorsController@index')->name('tutors');
//
// Route::post('tutor', 'tutorsController@getTutors')->name('gettutors');

// Tutor signup_user

// Route::get('tutor_signup', 'tutorSignupController@index')->name('tutor_signup');
//
// Route::post('tutor_signup', 'tutorSignupController@gotTutors')->name('gettutor_signup');


// User signup_user

Route::get('user_signup', 'user_signupController@index')->name('user_signup');

Route::post('user_signup', 'user_signupController@getUsers')->name('getuser_signup');


Route::get('user_signup', function() {
  return View::make('frontend.user_signup');
});


Route::resource('search', 'searchController@index');



// students

Route::get('students', 'tutorsController@index')->name('tutors');

Route::post('tutor', 'tutorsController@getTutors')->name('gettutors');


// Search

Route::get('search', 'searchController@index')->name('search');


// User Profile Page

Route::get('user_profile', 'user_profileController@index')->name('user_profile_page');

Route::auth();

Route::get('/home', 'HomeController@index');
