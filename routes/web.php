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

Route::get("/befregister",[homeControl::class,"beforeReg"]);
Route::get("/beflogin",[homeControl::class,"beforeLog"]);
Route::get("/form",[homeControl::class,"formReg"]);

Route::view('provForm', 'formprovider');
Route::POST("addProv",[homeControl::class,"newProvider"]);


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

// test

Route::get("/reg",[adminControl::class,"regprov"]);

Route::group(['middleware' => ['auth']],function(){

Route::get("show/{id}",[homeControl::class,"showProfile"]);
});

// Route::view('edit', 'provider.edit');
// Route::POST("action",[provControl::class,'updateProject']);

// Route::get("/action",[provControl::class,"showForm"]);
// Route::get("/upd{id}",[provControl::class,"showDetail"]);

Route::POST("action",[provControl::class,'addProvider']);
Route::get("/createproject",[provControl::class,"show"]);

Route::view('addprov', 'auth.registerprov');
Route::POST("addprovider",[adminControl::class,'addprov']);

// Middleware

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
      return view('dashboard');
 })->name('dashboard');







