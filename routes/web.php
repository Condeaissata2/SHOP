<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\articleController;
use App\Http\Controllers\layoutController;

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

Route::get('/',[layoutController::class,'index']);

Route::get('/contact',[ContactController:: class,'index']);

Route::get('/articles',[ArticleController:: class,'index']);

Route::get('/test',function(){
    return view('base');
});
