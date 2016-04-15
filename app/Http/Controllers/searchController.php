<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use DB;

use Request;


class searchController extends Controller
{
  public function index() {
      return view('frontend.search');
  }


  public function getSearch(Request $request)
  {
     	// Gets the query string from our form submission
      $query = Request::input('search');
      // Returns an array of articles that have the query string located somewhere within
      // our articles titles. Paginates them so we can break up lots of search results.
    	$articles = DB::table('users')
                  ->where('name', 'LIKE', '%' . $query . '%')
                  ->orWhere('skills_learn', 'LIKE', '%' . $query . '%')
                  ->orWhere('skills_teach', 'LIKE', '%' . $query . '%')
                  ->orWhere('city', 'LIKE', '%' . $query . '%')
                  ->get();

  	// returns a view and passes the view the list of articles and the original query.
      return view('frontend.search')->with('articles', $articles);
   }

}
