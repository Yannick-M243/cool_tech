<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class tagController extends Controller
{
    public function index(Request $request){
        
    $tag_number = $request->input('tag');
    $selected_tag="";
    switch ($tag_number) {
    case '1':
        $selected_tag="AI";
        break;
    case '2':
        $selected_tag="Google";
        break;
    case '3':
        $selected_tag="High-Performance Computing";
        break;
    case '4':
        $selected_tag="Singularity";
        break;
    default:
    "Invalid tag number!";
    }

    $filtered_articles = DB::table('articles')
    ->join('tags', 'tags.article_id', '=', 'articles.article_id')
    ->select('articles.*', 'tags.*')
    ->where('tags.tag_name', $selected_tag)
    ->get();

    return view('tag')->with(['filtered_articles'=>$filtered_articles])->with(['selectedTag'=>$selected_tag]);  
    }
}
