<?php

use App\Http\Controllers\homeControl;
use App\Http\Controllers\custControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\provControl;
use App\Http\Controllers\SendEmailController;

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

// Route::get('/testjer', function () {
//     return view('landing');
// });


Route::get('/', [homeControl::class,"landing"]);
Route::get("/redirect",[homeControl::class,"redirectFunct"]);
Route::any('/findtheuser',[custControl::class,"resultOf"]);



Route::get("/befregister",[homeControl::class,"beforeReg"]);
Route::get("/beflogin",[homeControl::class,"beforeLog"]);
Route::get("/form",[homeControl::class,"formReg"]);


Route::view('provForm', 'formprovider');
Route::POST("addProv",[homeControl::class,"newProvider"]);

Route::get("/profiletest",[homeControl::class,"testProf"]);
Route::get("/change",[homeControl::class,"changePass"]);
Route::get("/delete",[homeControl::class,"deleteACC"]);
Route::get("/listDown",[provControl::class,"listOut"]);
Route::get("/custRequest",[provControl::class,"custRequest"]);

// Admin page

Route::get('/listCustomer', [adminControl::class,"custSearch"]);
Route::any('/custSearch',[adminControl::class,"custGo"]);

Route::get('/listProvider', [adminControl::class,"provSearch"]);
Route::any('/provSearch',[adminControl::class,"provGo"]);

Route::get('/listRequest', [adminControl::class,"reqSearch"]);
Route::any('/reqSearch',[adminControl::class,"reqGo"]); 


// Customer page
  
Route::get("/prof",[custControl::class,"show"]);

Route::get("show/create/{id}",[custControl::class,"bookie"]);
Route::get("/show/show/create/{id}",[custControl::class,"bookie"]);
Route::POST("add",[custControl::class,'addProject']);

Route::get("/disp",[custControl::class,"display"]);
Route::get("/changepassword",[custControl::class,"pass"]);
Route::get("/deleteaccount",[custControl::class,"delete"]);
Route::get("/editaccount",[custControl::class,"edit"]);
      
Route::get("/history",[custControl::class,"showHistory"]);

Route::get("/create",[custControl::class,"success"]);


// Provider page


Route::get("/showProfile/{id}",[provControl::class,"update"]);
Route::POST("/editprof",[provControl::class,"testOnly"]);


Route::get("/req",[provControl::class,"reqBook"]);

// test

Route::get("/reg",[adminControl::class,"regprov"]);

Route::get("show/{id}",[homeControl::class,"showProfile"]);
Route::get("show/show/{id}",[homeControl::class,"showProfile"]);

// Route::view('edit', 'provider.edit');
// Route::POST("action",[provControl::class,'updateProject']);

// Route::get("/action",[provControl::class,"showForm"]);
// Route::get("/upd{id}",[provControl::class,"showDetail"]);

Route::POST("action",[provControl::class,'addProvider']);
Route::get("/createproject",[provControl::class,"show"]);

Route::view('addprov', 'auth.registerprov');
Route::POST("addprovider",[adminControl::class,'addprov']);



Route::POST("insert/{id}",[adminControl::class,"acceptProv"]);
Route::POST("delete/{id}",[adminControl::class,"deleteProv"]);

Route::POST("accept/{id}",[provControl::class,"acceptCust"]);
Route::POST("decline/{id}",[provControl::class,"deleteReq"]);

//Email

Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index');
Route::post('/sendemail/send', 'App\Http\Controllers\adminControl@acceptProv');

// Middleware





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
      return view('dashboard');
 })->name('dashboard');







