<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class searchController extends Controller
{
    public $error=false;

    public function index(){
        $categories = DB::table('categories')->get();//getting categories
        $notFound=$this->getError();//getting the error boolean variable 
        return view('search')->with(['categories'=>$categories])->with(['notFound'=>$notFound]);
    }

    //Find article by ID
    public function findById(Request $request){
        $article_id=$request->input('article');

        //checking if the article exist
        $article_exist = DB::table('articles')->where("article_id","=",$article_id)->exists();
        if($article_exist){

            //if the article exists it will call the fonction index from the article controller to display the article found
            return app('App\Http\Controllers\articleController')->index($article_id);
            //if the article does not exist it will set the error variable to true and call the index function
        }else{ 
            $this->setError(true);
            return $this->index();
        }
    }

    //Function to Find article by Category
    public function findByCat(Request $request){
        $category_Id = $request->categoryId;

        $filtered_articles = DB::table('articles')->where("category_id","=",$category_Id)->get();
        $selectedCat= DB::table('categories')->where("category_id","=",$category_Id)->first();
        return view('category')->with(['filtered_articles'=>$filtered_articles])->with(['selectedCat'=>$selectedCat]);

    }

    //Function to Find article by tag
    public function findByTag(Request $request){
        //getting the tag name selected by the user
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
                echo "Invalid tag number!";
        }

        //getting articles the articles with the selected tag 
        $filtered_articles = DB::table('articles')
        ->join('tags', 'tags.article_id', '=', 'articles.article_id')
        ->select('articles.*', 'tags.*')
        ->where('tags.tag_name', $selected_tag)
        ->get();

        return view('tag')->with(['filtered_articles'=>$filtered_articles])->with(['selectedTag'=>$selected_tag]);  
    }

    public function setError($err){
        $this->error = $err;
    }

    public function getError(){
        return $this->error;
    }
}
