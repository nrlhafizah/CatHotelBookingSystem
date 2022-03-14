<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Search;
use App\Models\Registered;
use App\Models\Profile;
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
		return back()->with('error','No results found!');
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
		return back()->with('error','No results found!');
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
		return back()->with('error','No results found!');
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
        $new = new Profile;

        $add->name=$data->name;
        $add->email=$data->email;
        $add->usertype='2';
        $add->password=Hash::make('12345678');
        $add->phoneNumber=$data->phoneNumber;
        $add->hotelName=$data->hotelName;
        $add->address=$data->address;
        $add->SSM=$data->ssm;
        
        $add->save();

        $userID = DB::table('users')->where('email', $data->email)->first()->id;
         
            $new->id=$userID;
            $new->description='  ';
            $new->service1='  ';
            $new->desc1='  ';
            $new->service2='  ';
            $new->desc2='  ';
            $new->service3='  ';
            $new->desc3='  ';
            $new->service4='  ';
            $new->desc4='  ';
       
 
            $new->save();

        
            $data->delete();
            Mail::to($data->email)->send(new SendMail($data));

            return back()->with('success','Provider successfully added.');
        

    }

    function deleteProv($id)
    {
        $data1=Registered::find($id);

        Mail::to($data1->email)->send(new declineMail($data1));

        $data1->delete();

        $data = Registered::paginate(9);
        return back()->with('success','Provider has been removed.');
    }

    function addprov(Request $request, User $user, Profile $new)
    {


      //Check Validation Request
      $validate = $request->validate(
        //Check Validation
        [
          'name' => ['required'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required'],
          'description' => ['required'],
              'service1' => ['required'],
              'desc1' => ['required'],
              'service2' => ['required'],
              'desc2' => ['required'],
              'service3' => ['required'],
              'desc3' => ['required'],
              'service4' => ['required'],
              'desc4' => ['required'],
              'img' => ['required'],

        ],
        //Error Message
        [
          'name.required' => 'Firt Name is required',
          'email.required' => 'Email is required',
          'user_password.required' => 'Password is required',
          'description.required' => 'Firt Name is required',
                'service1.required' => 'Email is required',
                'desc1.required' => 'Password is required',
                'service2.required' => 'Email is required',
                'desc2.required' => 'Password is required',
                'service3.required' => 'Email is required',
                'desc3.required' => 'Password is required',
                'service4.required' => 'Email is required',
                'desc4.required' => 'Password is required',
                'img.required' => 'Email is required',


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

