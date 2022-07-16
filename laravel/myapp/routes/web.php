<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;


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

// Route::get('/', function () {
//     //return view('welcome');
//     return "Hello laravel";
// });

Route::get('/',[AdminController::class,'index']);
Route::get('/book',[BookController::class,'index']);

Route::get('/user',[UserController::class,'index']);
Route::get('/user/{id}',[UserController::class,'show'])->name('showuser')->where('id','[0-9]+');//set alias name for route and call with view user.blade.php
// where('id','[0-9]') use for validation accept user input only number on route
Route::get('/user/{id}/child/{childid}',[UserController::class,'child']);

Route::get('/post',[UserController::class,'getdata']);


//State Route
//Route::resource('state', StateController::class);
Route::get('state',[StateController::class,'index'])->name('state.index');

Route::post('addcity','CityController@store');
