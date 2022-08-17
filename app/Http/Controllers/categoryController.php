<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class categoryController extends Controller
{
    public function index($categoryId){
        $filtered_articles = DB::table('articles')->where("category_id","=",$categoryId)->get();
        $cat_name= DB::table('category')->where("category_id","=",$categoryId)->category_name;

        return view('category')->with(['articles'=>$filtered_articles])->with(['category'=>$cat_name]);
    }

    public function create(Request $request){
        
        $category_Id = $request->categoryId;

        $filtered_articles = DB::table('articles')->where("category_id","=",$category_Id)->get();
        $selectedCat= DB::table('categories')->where("category_id","=",$category_Id)->first();

        return view('category')->with(['filtered_articles'=>$filtered_articles])->with(['selectedCat'=>$selectedCat]);
        
        
    }
}
