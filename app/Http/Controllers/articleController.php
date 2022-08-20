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

    public function addtag(Request $request){
        //$tags = $request->all();
       // $tags['tags'] = $request->input('tags');
        $tagss = serialize($request->input('tags'));
        $id = $request->input('article-id');

        $database_tags=DB::table('tags')->where('article_id', '=', $id)->exists();

        if ($database_tags){
            $affected = DB::table('tags')
              ->where('article_id', $id)
              ->update(['tag_name' => $tagss]);
        //DB::table('tags')->where('articles_id', '=', $id)->delete();
        }else{
        DB::table('tags')->insert([
        'article_id' => $id,
        'tag_name' => $tagss
        ]);
        }
        //delete all tags
        
        //Post::create($input);
        return redirect()->route('article.index');
    }
}
