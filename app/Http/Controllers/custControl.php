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

class custControl extends Controller
{



   function resultOf(Request $request){

        $q = $request->get('q');
        $data = User::where('hotelName', 'LIKE', '%' . $q . '%')->orWhere('address','like','%'.$q.'%')->paginate(5)->setpath('');
		if (count ( $data ) > 0)
        return view ( 'customer.custpage' )->withData ( $data )->withQuery ( $q );
    else
        return view ( 'customer.custpage' )->withMessage ( 'No Details found. Try to search again !' );
		 
   }


   function fillBook($id)
   {
    $data=User::find($id);
    $prof=Profile::all();
       return view("customer.booking", ['data'=>$data, 'prof'=> $prof]);
   }

      function addProject(Request $req)
    {

        
        $newBook= new Booking;

        $newBook->name=$req->name;
        $newBook->email=$req->email;
        $newBook->phoneNumber=$req->no;
        $newBook->totalCats=$req->cats;
        $newBook->checkIn=$req->in;
        $newBook->checkOut=$req->out;
        $newBook->UserID=Auth::user()->id;
        $newBook->hotelID=$req->bookid;
        $newBook->save();

        return view('customer.success');
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
        return view('customer.history');
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
