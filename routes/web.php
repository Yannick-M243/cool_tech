<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\articleController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\tagController;
use App\Http\Controllers\searchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::post('/category',function(){;
$data = $request->request->get('form');
var_dump($data['name']);
});
*/
Route::get('/article/{article_id}', [articleController::class,'index']);
Route::post('/article', [articleController::class,'index']);
Route::post('/category',[categoryController::class,'index']);
Route::post('/article.addtag', [articleController::class,'addtag']);
Route::post('/search.findById', [searchController::class,'findById']);
Route::post('/search.findByCat', [searchController::class,'findByCat']);
Route::post('/search.findByTag', [searchController::class,'findByTag']);
Route::post('/tag', [tagController::class,'index']);
Route::get('/search', [searchController::class,'index']);
Route::get('/legal', function(){
    return view('legal');
});
