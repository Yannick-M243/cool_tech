<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class homeController extends Controller
{
      public function index() {
        $articles = DB::table('articles')->get();
        $categories = DB::table('categories')->get();

        return view('home')->with(['articles'=>$articles])->with(['categories'=>$categories]);
    }

}
