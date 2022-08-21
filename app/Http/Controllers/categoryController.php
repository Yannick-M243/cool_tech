<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class categoryController extends Controller
{
    public function index(Request $request){
        
        $category_Id = $request->categoryId;

        $filtered_articles = DB::table('articles')->where("category_id","=",$category_Id)->get();
        $selectedCat= DB::table('categories')->where("category_id","=",$category_Id)->first();

        return view('category')->with(['filtered_articles'=>$filtered_articles])->with(['selectedCat'=>$selectedCat]);
        
    }
}
