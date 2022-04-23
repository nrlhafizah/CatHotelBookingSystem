<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Search;
use App\Models\Registered;
use App\Models\Profile;
use App\Models\Detail;
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
    function custSearch(Request $request)
    {
        $data = User::paginate(9);

        if($request::has('view_deleted'))
        {
            $data = User::onlyTrashed()->get();
        }

        return view('admin.customer', compact('data'));
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
			$booking = Booking::all();
            return view('admin.customer', ['data'=>$data, 'booking'=>$booking]);
		}
		return back()->with('error','No results found!');
	}
    }

    function customerDel($id)
    {
        User::find($id)->delete();

        return back()->with('success','Customer has been removed.');
    }

   


    //Provider Management 
    function provSearch(Request $request)
    {
        $data = User::paginate(9);

        if($request::has('view_deleted'))
        {
            $data = User::onlyTrashed()->get();
        }
        
        return view('admin.provider', compact('data'));
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
			$booking = Booking::all();
        return view('admin.provider', ['data'=>$data, 'booking'=>$booking]);
		}
		return back()->with('error','No results found!');
	}
    }

    function providerDel($id)
    {
        User::find($id)->delete();

        return back()->with('success','Provider has been removed.');
    }

    //Restore after soft delete
    public function restore($id)
    {
        User::withTrashed()->find($id)->restore();

        return back()->with('success', 'User Restored Successfully');
    }

    public function restore_all()
    {
        User::onlyTrashed()->restore();

        return back()->with('success', 'All User Restored Successfully');
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
        $detail = new Detail;

        $add->name=$data->name;
        $add->email=$data->email;
        $add->usertype='2';
        $add->password=Hash::make('12345678');        
        
        $add->save();

        $userID = DB::table('users')->where('email', $data->email)->first()->id;
         
        $detail->userID=$userID;
        $detail->phoneNumber=$data->phoneNumber;
        $detail->address=$data->address;
        $detail->postcode=$data->postcode;
        $detail->state=$data->state;
        $detail->hotelName=$data->hotelName;
        $detail->SSM=$data->SSM;
        $detail->created_at=Carbon::now();

        $detail->save();

            $new->id=$userID;
            $new->description='  ';
            $new->images='  ';
        
            $new->save();

            $data->delete();
            Mail::to($data->email)->send(new SendMail($data));

            return back()->with('success','Provider successfully added.');
        

    }

    function deleteProv($id, Request $request)
    {
        $data1=Registered::find($id);

        $data1->reason=$request->reason;

        $data1->save();

        Mail::to($data1->email)->send(new declineMail($data1));

        $data1->delete();

        $data = Registered::paginate(9);
        return back()->with('success','Provider has been removed.');
    }

    
 
    



}

