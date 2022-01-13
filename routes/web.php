<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;

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
    return view('welcome');
});

Route::get("/",[homeControl::class,"index"]);

Route::get("/prof",[homeControl::class,"show"]);

Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::get('/find', [homeControl::class,"find"]);
Route::post('/findSearch', [homeControl::class,"findSearch"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

