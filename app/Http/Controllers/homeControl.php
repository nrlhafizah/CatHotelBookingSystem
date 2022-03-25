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
use App\Models\Registered;
use App\Models\Profile;


class homeControl extends Controller
{
    //

    
    //HOME PAGE FOR DISPLAY DATA AND SEARCH FUNCTION 

    function landing()
    {
        $data = User::paginate(9);
        return view('home')->withData($data);

    }

    

    // OPTION BEFORE USER LOGIN/REGISTER
    function beforeReg()
    {
        return view('befregister');
    }
    function beforeLog()
    {
        return view('beflogin');
    }

    function testProf()
    {
        return view('provider.testprofile');
    }

    function changePass()
    {
        return view('provider.changepass');
    }

    function deleteACC()
    {
        return view('provider.deleteaccount');
    }

    
    function formReg()
    {
        return view('formprovider');
    }

    function contact($id)
    {
        $data=User::find($id);
        $prof=Profile::all();
        return view('provider.contact', ['data'=>$data, 'prof'=> $prof]);
    }


    function showProfile($id)
    {
    $data=User::find($id);
    $prof=Profile::all();
    return view('customer.display', ['data'=>$data, 'prof'=> $prof]);
    }

    function redirectFunct()
    {
        $typeuser=Auth::user()->usertype;

        if($typeuser=='0')
        {

            $provider = User::where('usertype','=','2')->count();
            $customer = User::where('usertype','=','1')->count();
            $booking = Booking::All()->count();
            $total = User::All()->count();
            return view('admin.adminpage', ['provider'=>$provider, 'customer'=>$customer, 'total'=>$total, 'booking'=>$booking]);
          
        }
        else if($typeuser=='1')
        {
            $data = User::paginate(9);
            return view('customer.custpage')->withData($data);
     
        }
        else 
        {
            $data=Profile::all();
            return view('provider.testprofile', compact('data'));
        }

    }

    function newProvider(Request $req)
    {
        $new= new Registered;

        $new->name=$req->name;
        $new->email=$req->email;
        $new->phoneNumber=$req->no;
        $new->hotelName=$req->hname;
        $new->address=$req->address;
        $new->SSM=$req->ssm;
        $new->save();

        return back()->with('success','You have successfully registered. Please wait until you receive email from the admin.');
    }

    
    

}
