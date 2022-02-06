<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
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
use App\Models\User;
use App\Models\Registered;

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
        $data = User::paginate(9);
        $x=DB::table('users')
        ->join('registered_provider','users.id', "=", "registered_provider.reg_id")->get();
        return view("home",['data'=>$data, 'x' => $x]);
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

    function beforeReg()
    {
        return view('befregister');
    }
    function beforeLog()
    {
        return view('beflogin');
    }

    function formReg()
    {
        return view('formprovider');
    }


    function showProfile($id)
    {
    $data=User::find($id);
    return view('customer.display', ['data'=>$data]);
    }

    function redirectFunct()
    {
        $typeuser=Auth::user()->usertype;

        if($typeuser=='0')
        {

            $provider = User::where('usertype','=','2')->count();
            $customer = User::where('usertype','=','1')->count();
            $total = User::All()->count();
            return view('admin.adminpage', ['provider'=>$provider, 'customer'=>$customer], ['total'=>$total]);
          
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

    function newProvider(Request $req)
    {
        $new= new Registered;

        $new->name=$req->name;
        $new->email=$req->email;
        $new->phoneNumber=$req->no;
        $new->hotelName=$req->hname;
        $new->SSM=$req->ssm;
        $new->save();

        return view("success");
    }


}
