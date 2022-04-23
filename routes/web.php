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

//home 

Route::get('/', [homeControl::class,"landing"]);
Route::get("/redirect",[homeControl::class,"redirectFunct"]);
Route::get("/befregister",[homeControl::class,"beforeReg"]);
Route::get("/beflogin",[homeControl::class,"beforeLog"]);
Route::get("/form",[homeControl::class,"formReg"]);
Route::view('provForm', 'formprovider');
Route::POST("addProv",[homeControl::class,"newProvider"]);


// Route::middleware(['prevent-back-history', 'auth'], function () {


// Admin page
Route::group(['middleware' => ['prevent-back-history', 'auth']],function(){

      Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::get('/listCustomer', [adminControl::class,"custSearch"])->name('customer.index');
Route::any('/custSearch',[adminControl::class,"custGo"]);
Route::delete('deletecustomer/{id}', [adminControl::class, 'customerDel']);

Route::get('/listProvider', [adminControl::class,"provSearch"])->name('provider.index');;
Route::any('/provSearch',[adminControl::class,"provGo"]);
Route::delete("deleteprovider/{id}",[adminControl::class,"providerDel"]);

Route::get('/listRequest', [adminControl::class,"reqSearch"]);
Route::any('/reqSearch',[adminControl::class,"reqGo"]); 

Route::POST("insert/{id}",[adminControl::class,"acceptProv"]);
Route::POST("delete/{id}",[adminControl::class,"deleteProv"]);


Route::get('/restore_all', [adminControl::class, 'restore_all'])->name('post.restore_all');
Route::get('/restore/one/{id}', [adminControl::class, 'restore'])->name('post.restore');

Route::get("/reg",[adminControl::class,"regprov"]);




// Customer page
  
Route::any('/findtheuser',[custControl::class,"resultOf"]);

Route::get("/prof",[custControl::class,"show"]);

Route::get("show/create/{id}",[custControl::class,"bookie"]);
Route::get("/show/show/create/{id}",[custControl::class,"bookie"]);
Route::POST("add",[custControl::class,'addProject']);

Route::get("/disp",[custControl::class,"display"]);
Route::get("/changepassword",[custControl::class,"pass"]);
Route::get("/deleteaccount",[custControl::class,"delete"]);
Route::get("/editaccount",[custControl::class,"edit"]);
      
Route::get("/history",[custControl::class,"showHistory"]);
Route::get("/requestBooking",[custControl::class,"showRequest"]);

Route::get("/create",[custControl::class,"success"]);

Route::get("show/{id}",[custControl::class,"showProfile"]);
Route::get("show/contactHotel/{id}",[homeControl::class,"contact"]);
Route::get("show/show/{id}",[homeControl::class,"showProfile"]);



// Provider page


Route::get("/showProfile/{id}",[provControl::class,"update"]);
Route::POST("/editprof",[provControl::class,"testOnly"]);

Route::get("/req",[provControl::class,"reqBook"]);
Route::get("/change",[provControl::class,"changePass"]);
Route::get("/delete",[provControl::class,"deleteACC"]);
Route::get("/listDown",[provControl::class,"listOut"]);
Route::get("/custRequest",[provControl::class,"custRequest"]);

Route::POST("accept/{id}",[provControl::class,"acceptCust"]);
Route::POST("decline/{id}",[provControl::class,"deleteReq"]);
Route::post("mark/{id}",[provControl::class,"markComplete"]);

Route::POST("action",[provControl::class,'addProvider']);
Route::get("/createproject",[provControl::class,"show"]);


});

// Middleware

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
      return view('dashboard');
 })->name('dashboard');







