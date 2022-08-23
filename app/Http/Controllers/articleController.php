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

    //getting the list of tags
    $tags = DB::table('tags')->where('article_id', '=', $article_id)->get();

    //Returning the view article with data that will be displayed on the page
    return view('article')->with(['article'=>$selectedArticle])->with(['category'=>$category])->with(['tags'=>$tags]);
    }

    //function to add tag to an article
    public function addtag(Request $request){
        //getting the tag selected by the user
        $tags = $request->input('tags');
        $id = $request->input('article-id');

        //checking if the selected article already have tags
        $database_tags=DB::table('tags')->where('article_id', '=', $id)->exists();

        //If the article already have tags then we delete the all tags first before storing the new ones
        if ($database_tags){
        DB::table('tags')->where('article_id', '=', $id)->delete();
        }

        //Storing new tags to the database
        for($i = 0;$i < count($tags);$i++){
            DB::table('tags')->insert([
            'article_id' => $id,
            'tag_name' => $tags[$i]
            ]);
        }

        //redirecting to the previous page
        return back()->withInput();
    }

}
