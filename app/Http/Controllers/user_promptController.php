<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class user_promptController extends Controller
{
  public function index() {

      return view('frontend.user_prompt');

  }
}
