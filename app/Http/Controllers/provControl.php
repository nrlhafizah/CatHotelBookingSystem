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
use Carbon\Carbon;
use Session;
use App\Models\Booking;
use App\Models\Search;
use App\Models\Registered;
use App\Models\Profile;
use App\Models\RequestCustomer;
use App\Models\Detail;

class provControl extends Controller
{
    function update($id)
    {
        $detail=Detail::all();
        $data=Profile::find($id);
        return view("provider.edit", ['data'=>$data, 'detail'=>$detail  ]);
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
        $new->services=implode(', ',(array)$req->services);;
       
        // if($req->hasFile('images')){
        //     $names = [];
        //     foreach($req->file('images') as $image) {
        //         $destination_path = 'public/images/services';
        //         $name = $image->getClientOriginalName();
        //         $path = $image->storeAs($destination_path, $name);
        //         array_push($names, $name); 
        //         $new->images = json_encode($names);
        //     } 
        // }

        if($req->hasFile('image1')){

            $destination_path = 'public/images/services';
            $image = $req->file('image1');
            $image_name = $image->getClientOriginalName();
            $path = $req->file('image1')->storeAs($destination_path, $image_name);

            $new->image1 = $image_name;
        }

        if($req->hasFile('image2')){

            $destination_path = 'public/images/services';
            $image = $req->file('image2');
            $image_name = $image->getClientOriginalName();
            $path = $req->file('image2')->storeAs($destination_path, $image_name);

            $new->image2 = $image_name;
        }
        if($req->hasFile('image3')){

            $destination_path = 'public/images/services';
            $image = $req->file('image3');
            $image_name = $image->getClientOriginalName();
            $path = $req->file('image3')->storeAs($destination_path, $image_name);

            $new->image3 = $image_name;
        }
        if($req->hasFile('image4')){

            $destination_path = 'public/images/services';
            $image = $req->file('image4');
            $image_name = $image->getClientOriginalName();
            $path = $req->file('image4')->storeAs($destination_path, $image_name);

            $new->image4 = $image_name;
        }
        if($req->hasFile('image5')){

            $destination_path = 'public/images/services';
            $image = $req->file('image5');
            $image_name = $image->getClientOriginalName();
            $path = $req->file('image5')->storeAs($destination_path, $image_name);

            $new->image5 = $image_name;
        }
        if($req->hasFile('image6')){

            $destination_path = 'public/images/services';
            $image = $req->file('image6');
            $image_name = $image->getClientOriginalName();
            $path = $req->file('image6')->storeAs($destination_path, $image_name);

            $new->image6 = $image_name;
        }
        $new->created_at=Carbon::now();
        $new->save();

        $data=Profile::find($req->id);
        $detail=Detail::all();

        return view("provider.edit", ['data'=>$data, 'detail'=>$detail  ]);

    }

    function changePass()
    {
        $detail=Detail::all();
        return view('provider.changepass',['detail'=>$detail ]);
    }

    function deleteACC()
    {
        $detail=Detail::all();
        return view('provider.deleteaccount',['detail'=>$detail ]);
    }

    function listOut()
    { 
        $detail=Detail::all();
        $history = Booking::all();
        return view('provider.list', ['history' => $history, 'detail'=>$detail]);

    }

    function custRequest()
    {
        $detail=Detail::all();
        $history = RequestCustomer::all();
        return view('provider.request', ['history' => $history, 'detail'=>$detail]);

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
