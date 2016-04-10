<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class searchController extends Controller
{
  public function index() {
      return view('frontend.search');
  }


  public function search(Request $request)
  {
     	// Gets the query string from our form submission
      $query = Request::input('search');
      // Returns an array of articles that have the query string located somewhere within
      // our articles titles. Paginates them so we can break up lots of search results.
    	$articles = DB::table('users_table')->where('first_name', 'LIKE', '%' . $query . '%')->paginate(10);

  	// returns a view and passes the view the list of articles and the original query.
      return view('frontend.search', compact('articles', 'query'));
   }

}
