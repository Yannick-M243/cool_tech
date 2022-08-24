<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\articleController;
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
Route::get('/',[homeController::class,'index']);
Route::get('/article/{article_id}', [articleController::class,'index']);
Route::post('/article.addtag', [articleController::class,'addtag']);
Route::post('/search.findById', [searchController::class,'findById']);
Route::post('/search.findByCat', [searchController::class,'findByCat']);
Route::post('/search.findByTag', [searchController::class,'findByTag']);
Route::get('/search', [searchController::class,'index']);
Route::get('/legal', function(){
    return view('legal');
});
