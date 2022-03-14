<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\TestModel;
use App\view;
use Illuminate\Support\Facades\Route;
use Validator, Redirect;
use Illuminate\Http\Request;
use Session;
use App\Models\Booking;
use App\Models\Search;
use App\Models\User;
use App\Models\Profile;
use Carbon\Carbon;

use App\Models\RequestCustomer;


class custControl extends Controller
{



   function resultOf(Request $request){

        $q = $request->get('q');
        $data = User::where('hotelName', 'LIKE', '%' . $q . '%')->orWhere('address','like','%'.$q.'%')->paginate(5)->setpath('');
		if (count ( $data ) > 0)
        return view ( 'customer.custpage' )->withData ( $data )->withQuery ( $q );
    else
    return back()->with('error','No details found! Try to search again.');
		 
   }


   function fillBook($id)
   {
    $data=User::find($id);
    $prof=Profile::all();
       return view("customer.booking", ['data'=>$data, 'prof'=> $prof]);
   }

      function addProject(Request $req)
    {

        $data=User::find($req->bookid);
        $newBook= new RequestCustomer;

        $newBook->id=Auth::user()->id;
        $newBook->name=$req->name;
        $newBook->email=$req->email;
        $newBook->phoneNumber=$req->no;
        $newBook->totalCats=$req->cats;
        $newBook->checkIn=$req->in;
        $newBook->checkOut=$req->out;
        $newBook->hotelID=$req->bookid;
        $newBook->hotelName=$data->hotelName;
        $newBook->created_at = Carbon::now();
        $newBook->save();

        return back()->with('success','Successfully booked!');
    }

    function show()
    {
        return view("customer.profile");
    }

    function display()
    {
        return view("customer.display");
    }

    function pass()
    {
        return view('customer.manage.changepass');
    }

    function delete()
    {
        return view('customer.manage.deleteaccount');
    }

    function edit()
    {
        return view('customer.manage.edit');
    }

    function showHistory() 
    {
        $history = Booking::all();
        return view('customer.history', ['history' => $history]);
    }
    function success()
    {
        return view('customer.success');
    }

    function bookie($id)
    {
        $data=User::find($id);
        return view('customer.booking', ['data' => $data]);
    }

 


 

}
