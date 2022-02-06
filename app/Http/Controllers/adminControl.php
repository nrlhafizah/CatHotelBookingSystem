<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Booking;
use App\Models\User;
use App\Models\Search;
use App\Models\Registered;

use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\PasswordValidationRules;
use Laravel\Jetstream\Jetstream;
use Laravel\Fortify\Rules\Password;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\declineMail;

class adminControl extends Controller
{

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    //Customer Management 
    function custSearch()
    {
        $data = User::paginate(9);
        return view('admin.customer')->withData($data);
    }

    function custGo()
    {
        $q = (Request::get('q'));
	    if($q != ''){
		$data =User::where('name','like','%'.$q.'%')->orWhere('email','like','%'.$q.'%')->paginate(5)->setpath('');
		$data->appends(array(
           'q' => Request::get('q'),
		));
		if(count($data)>0){
			return view('admin.customer')->withData($data);
		}
		return view('admin.customer')->withMessage("No Results Found!");
	}
    }


    //Provider Management 
    function provSearch()
    {
        $data = User::paginate(9);
        return view('admin.provider')->withData($data);
    }

    function provGo()
    {
        $q = (Request::get('q'));
	    if($q != ''){
		$data =User::where('name','like','%'.$q.'%')->orWhere('email','like','%'.$q.'%')->paginate(5)->setpath('');
		$data->appends(array(
           'q' => Request::get('q'),
		));
		if(count($data)>0){
			return view('admin.provider')->withData($data);
		}
		return view('admin.provider')->withMessage("No Results Found!");
	}
    }


    //Request Management 
    function reqSearch()
    {
        $data = Registered::paginate(9);
        return view('admin.request')->withData($data);
    }

    function reqGo()
    {
        $q = (Request::get('q'));
	    if($q != ''){
		$data =Registered::where('name','like','%'.$q.'%')->orWhere('email','like','%'.$q.'%')->paginate(5)->setpath('');
		$data->appends(array(
           'q' => Request::get('q'),
		));
		if(count($data)>0){
			return view('admin.request')->withData($data);
		}
		return view('admin.request')->withMessage("No Results Found!");
	}
    }


    function regprov()
    {
        return view('auth.registerprov');
    }


   
    function acceptProv($id, Request $request)
    {
        $data=Registered::find($id);
        $add = new User;

        $add->name=$data->hotelName;
        $add->email=$data->email;
        $add->usertype='2';
        $add->password=Hash::make('12345678');

        $add->save();

        Mail::to($data->email)->send(new SendMail($data));

        $data->delete();

        return view('admin.addProv');

    }

    function deleteProv($id)
    {
        $data1=Registered::find($id);

        Mail::to($data1->email)->send(new declineMail($data1));

        $data1->delete();

        return view('admin.request');

    }

    protected function addprov(Request $request, User $user)
    {


      //Check Validation Request
      $validate = $request->validate(
        //Check Validation
        [
          'name' => ['required'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required'],

        ],
        //Error Message
        [
          'name.required' => 'Firt Name is required',
          'email.required' => 'Email is required',
          'user_password.required' => 'Password is required',

        ]
      );

      //If Validate Success
      if($validate){

        $user->name = $request->name;
        $user->email = $request->email;
        $user->usertype = '2';
        $user->password = Hash::make('$request->password');


        //Execute Query
        $user->save();


        //If Success
        return redirect()->route('login')
                          ->with("message", "Account Succesffully Created");
     }
    }

}
