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
use App\Models\Registered;

class provControl extends Controller
{
    function update()
    {
        return view("provider.edit");
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

    // function showForm($id)
    // {
    //     $data=Regsitered::find($id);
    //     return view('provider.edit',['data'=>$data]);
    // }

    // function updateProject(Request $req)
    // {

    //     $upd= Registered::find($req->id);

    //     $upd->place=$req->place;
    //     $upd->detail=$req->detail;


    //     $upd->save();

    //     return redirect('stf');
    // }

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

    public function show()
    {
        $data=User::all();
        return view('provider.profile',['data'=>$data]);
    }
}
