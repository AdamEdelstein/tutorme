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

Route::get('tutor', 'tutorsController@index')->name('tutors');

Route::post('tutor', 'tutorsController@getTutors')->name('gettutors');

// Tutor signup_user

Route::get('tutor_signup', 'tutorSignupController@index')->name('tutor_signup');

Route::post('tutor_signup', 'tutorSignupController@getTutors')->name('gettutor_signup');


// students

Route::get('students', 'tutorsController@index')->name('tutors');

Route::post('tutor', 'tutorsController@getTutors')->name('gettutors');
