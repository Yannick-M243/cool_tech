<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class homeController extends Controller
{
  public function index() {
    $articles = DB::table('articles')->orderBy('creation_date', 'desc')->paginate(5);//getting the 5 latest articles
    return view('home')->with(['articles'=>$articles]);
  }
}
