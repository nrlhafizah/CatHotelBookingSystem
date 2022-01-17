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


use App\Models\Search1;

class homeControl extends Controller
{
    //

    function index()
    {
        $users = DB::select('select * from search');
        return view('home',['users'=>$users]);
    }
    function show()
    {
        return view("customer.profile");
    }
    function show1()
    {
        return view("provider.profile");
    }
    public function find()
    {	
    return view('home');			
    }		
    public function findSearch()
    {		
         $users = DB::select('select * from search');	
    $search = Request::get("search");	
    $test = Search1::where ( 'place', 'LIKE', '%' . $search . '%' )->orWhere ( 'detail', 'LIKE', '%' . $search . '%' )->get ();
    if (count ( $test ) > 0)
    return view ( 'home', ['users'=>$users] )->withDetails ( $test )->withQuery ( $search );
    else
    return view ( 'home', ['users'=>$users] )->withMessage ( 'No Details found. Try to search again !' );		
    }


    function redirectFunct()
    {
        $typeuser=Auth::user()->usertype;

        if($typeuser=='1')
        {
           
            return view('admin.adminpage');
        }
        else if($typeuser=='0')
        {
            $users = DB::select('select * from search');
            return view('customer.custpage', ['users'=>$users]);
     
        }
        else 
        {
            return view('provider.provpage');
        }


    }
}
