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
use Illuminate\Support\Facades\Mail;
use App\Mail\SendAcceptEmail;
use App\Mail\SendDeclineMail;
use Redirect;
use Illuminate\Support\Facades\Validator;
use Alert;
use Illuminate\Support\Facades\Response;
use App\Images;
use Image;

use Session;
use App\Models\Booking;
use App\Models\Search;
use App\Models\Registered;
use App\Models\Profile;
use App\Models\RequestCustomer;

class provControl extends Controller
{
    function update($id)
    {

        $data=Profile::find($id);
        return view("provider.edit", ['data'=>$data]);
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

    function markComplete($id)
    {
        $history = Booking::find($id);
        
        

        if($history->mark == false)
        {
            $history->mark = true;
            $history->update(['mark' => $history->mark]);
            return back()->with('success','Reservation completed!');
        }
        else
        {
            $history->mark = false;
            $history->update(['mark' => $history->mark]);
            return back()->with('success','Reservation pending!');
        }

    


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

    public function testOnly(Request $req)
    {
        
        $new=Profile::find($req->id);
        
        $new->id=$req->catid;
        $new->description=$req->desc;
        $new->service1=$req->s1;
        $new->desc1=$req->ds1;
        $new->service2=$req->s2;
        $new->desc2=$req->ds2;
        $new->service3=$req->s3;
        $new->desc3=$req->ds3;
        $new->service4=$req->s4;
        $new->desc4=$req->ds4;

        if($req->hasFile('images')){
            $names = [];
            foreach($req->file('images') as $image) {
                $destination_path = 'public/images/services';
                $name = $image->getClientOriginalName();
                $path = $image->storeAs($destination_path, $name);
                array_push($names, $name); 
                $new->images = json_encode($names);
            }
             
                
                
            
        }

        $new->save();

        $data=Profile::find($req->id);

        return view("provider.edit", ['data'=>$data]);
    }

    
    function show()
    {
        $data=User::all();
        return view('provider.profile',['data'=>$data]);
    }


    function listOut()
    {
        $history = Booking::all();
        return view('provider.list', ['history' => $history]);

    }

    function custRequest()
    {
        $history = RequestCustomer::all();
        return view('provider.request', ['history' => $history]);

    }

    function acceptCust($id)
    {
        
        $info=RequestCustomer::find($id);
        $data= new Booking;

        $data->name=$info->name;
        $data->email=$info->email;
        $data->phoneNumber=$info->phoneNumber;
        $data->totalCats=$info->totalCats;
        $data->checkIn=$info->checkIn;
        $data->checkOut=$info->checkOut;
        $data->additional=$info->additional;
        $data->UserID=$info->id;
        $data->hotelID=$info->hotelID;
        $data->status="Ongoing";
        $data->hotelName=$info->hotelName;
        $data->created_at =$info->created_at;

        $data->save();

        Mail::to($info->email)->send(new SendAcceptEmail($info));
        $info->delete();

        return back()->with('success','Customer accepted!');
    }

    function deleteReq($id,  Request $request)
    {
        $info=RequestCustomer::find($id);

        $info->reason=$request->reason;

        $info->save();

 
        Mail::to($info->email)->send(new SendDeclinemail($info));

        $info->delete();

        return back()->with('success','Customer has been removed!');
    }



}
