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
use App\Models\Detail;
use Carbon\Carbon;
 
use App\Models\RequestCustomer;


class custControl extends Controller
{
 

   function resultOf(Request $request){

        $q = $request->get('q');
        $details = Detail::where('hotelName', 'LIKE', '%' . $q . '%')->orWhere('address','like','%'.$q.'%')->orWhere('state','like','%'.$q.'%')->paginate(5)->setpath('');
		if (count ( $details ) > 0){
        $data = User::paginate(20)->where("usertype", "=", "2");
        return view ( 'customer.custpage', ['data'=>$data, 'details'=>$details]);
        }
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
        $newBook->name=Auth::user()->name;
        $newBook->email=Auth::user()->email;
        $newBook->phoneNumber=$req->no;
        $newBook->totalCats=$req->cats;
        $newBook->checkIn=Carbon::parse($req->in)->format('Y-m-d');
        $newBook->checkOut=Carbon::parse($req->out)->format('Y-m-d');
        $newBook->additional=$req->additional;
        $newBook->hotelID=$req->bookid;
        $newBook->created_at = Carbon::now();
        $newBook->save();

        return back()->with('success','Successfully booked! Please wait until they approve your request.');
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

    function showProfile($id)
    {
        $detail=Detail::all();
        $data=User::find($id);
        $prof=Profile::all();
        return view('customer.display', ['data'=>$data, 'prof'=> $prof, 'detail' => $detail]);
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
        $detail = Detail::all();
        return view('customer.history', ['history' => $history, 'detail' => $detail]);
    }

    function showRequest() 
    {
        $history = RequestCustomer::all();
        $user = Detail::all();
        return view('customer.request', ['history' => $history, 'user' => $user]);
    }

    function success()
    {
        return view('customer.success');
    } 

    function bookie($id)
    {
        $data=User::find($id);
        $info=Booking::all();

        return view('customer.booking', ['data' => $data, 'info' => $info]);
    }

 


 

}
