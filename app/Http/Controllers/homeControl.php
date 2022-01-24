<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\TestModel;
use App\view;
use Illuminate\Support\Facades\Route;
use Validator, Redirect;

use Session;

use App\Models\Booking;
use App\Models\Search;

class homeControl extends Controller
{
    //

    function index()
    {
        $users = DB::select('select * from search');
        return view('home',['users'=>$users]);
    }
    
    function dispSearch()
    {
        $data = Search::paginate(9);
        return view('home')->withData($data);
    }

    function goSearch()
    {
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
    }

    function before()
    {
        return view('befregister');
    }


    function redirectFunct()
    {
        $typeuser=Auth::user()->usertype;

        if($typeuser=='0')
        {
            $data = Search::paginate(9);
            return view('admin.adminpage')->withData($data);
          
        }
        else if($typeuser=='1')
        {
            $users = DB::select('select * from search');
            return view('customer.custpage', ['users'=>$users]);
     
        }
        else 
        {
            return view('provider.profile');
        }

    }
}
