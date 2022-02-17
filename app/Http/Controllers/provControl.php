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
use Redirect;
use Illuminate\Support\Facades\Validator;

use Session;
use App\Models\Booking;
use App\Models\Search;
use App\Models\Registered;
use App\Models\Profile;

class provControl extends Controller
{
    function update()
    {
        $data=Profile::all();
        return view("provider.edit", ['data'=>$data]);
    }

    function show1()
    {
        return view("provider.profile");
    }

    function reqBook()
    {
        return view("provider.request");
    }

    function showDetail($id)
    {
        $data=Registered::find($id);
        $x=DB::table('users')
        ->join('registered_provider','users.id', "=", "registered_provider.reg_id")->get();
        return view("provider.edit",['data'=>$data, 'x' => $x]);

    }


    function addProvider(Request $req)
    {

        
        $userid=Auth::user()->id;
        $new= new Registered;

        $new->reg_id=Auth::user()->id;
        $new->place=$req->place;
        $new->detail=$req->detail;
        $new->save();

        return view("provider.profile");
    }

    function testOnly(Request $req)
    {
    
        $new = Profile::all()->where(Auth::user()->id, $req->user_name)->first();

        $new->description=$req->desc;
        $new->service1=$req->s1;
        $new->desc1=$req->ds1;
        $new->service2=$req->s2;
        $new->desc2=$req->ds2;
        $new->service3=$req->s3;
        $new->desc3=$req->ds3;
        $new->service4=$req->s4;
        $new->desc4=$req->ds4;
        $new->img=$req->imgs;
        $new->user_name=Auth::user()->id;

        $new->save();

        $data=Profile::all();

        return view("provider.edit", ['data'=>$data]);
    }

    
    function show()
    {
        $data=User::all();
        return view('provider.profile',['data'=>$data]);
    }

}
