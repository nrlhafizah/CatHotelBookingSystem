<?php

use App\Http\Controllers\homeControl;
use App\Http\Controllers\custControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\provControl;

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

Route::get('/', function () {
    return view('home');
});


Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::get('/', [homeControl::class,"dispSearch"]);
Route::any('/search',[homeControl::class,"goSearch"]);

// Admin page

Route::get('/listCustomer', [adminControl::class,"custSearch"]);
Route::any('/custSearch',[adminControl::class,"custGo"]);

Route::get('/listProvider', [adminControl::class,"provSearch"]);
Route::any('/provSearch',[adminControl::class,"provGo"]);

Route::get('/listRequest', [adminControl::class,"reqSearch"]);
Route::any('/reqSearch',[adminControl::class,"reqGo"]);


// Customer page
  
Route::get("/prof",[custControl::class,"show"]);

Route::view('create', 'customer.booking');
Route::POST("add",[custControl::class,'addProject']);

Route::get("/disp",[custControl::class,"display"]);
      

// Provider page


Route::get("/edit",[provControl::class,"update"]);

Route::get("/provprof",[provControl::class,"show1"]);

Route::get("/req",[provControl::class,"reqBook"]);


// Middleware

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
      return view('dashboard');
 })->name('dashboard');




