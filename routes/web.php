<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\articleController;
use App\Http\Controllers\categoryController;

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


Route::post('/category',function(){;
$data = $request->request->get('form');
var_dump($data['name']);
});

Route::get('/', [homeController::class,'index']);
Route::get('/article/{article_id}', [articleController::class,'index']);
//Route::get('/category/{slug}', [categoryController::class,'index']);
Route::post('/category',[categoryController::class,'create']);