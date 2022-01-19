<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\homeControl;

use App\Models\Search;



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

Route::get("/book",[homeControl::class,"booking"]);
Route::get("/disp",[homeControl::class,"display"]);
Route::get("/edit",[homeControl::class,"update"]);

Route::get("/prof",[homeControl::class,"show"]);
Route::get("/provprof",[homeControl::class,"show1"]);

Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::get('/find', [homeControl::class,"find"]);
Route::post('/findSearch', [homeControl::class,"findSearch"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get("/search",[homeControl::class,"search"]);
// Route::get('/search', 'homeControl@search')->name('home');

Route::get('/', function () {
	$data = Search::paginate(9);
    return view('home')->withData($data);
});

Route::any('/search',function(){
	$q = (Request::get('q'));
	if($q != ''){
		$data =Search::where('place','like','%'.$q.'%')->orWhere('detail','like','%'.$q.'%')->paginate(5)->setpath('');
		$data->appends(array(
           'q' => Request::get('q'),
		));
		if(count($data)>0){
			return view('home')->withData($data);
		}
		return view('home')->withMessage("No Results Found!");
	}
});

