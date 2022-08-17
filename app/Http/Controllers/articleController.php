<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

class articleController extends Controller
{
    public function index($article_id){
       //getting the selected article from the database using the id passed as parameter
    $selectedArticle = DB::table('articles')->where('article_id', '=', $article_id)->first();
    //getting the category of the selected article
    $category = DB::table('categories')->where('category_id', '=', $selectedArticle->category_id)->first();

    $tags=DB::table('tags')->where('article_id', '=', $article_id)->get();

    return view('article')->with(['article'=>$selectedArticle])->with(['category'=>$category])->with(['tags'=>$tags]);
    }
}
