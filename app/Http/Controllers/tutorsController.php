<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class tutorsController extends Controller
{
  public function index() {
      return view('frontend.tutor');
  }

  public function getTutors () {

  }
}
