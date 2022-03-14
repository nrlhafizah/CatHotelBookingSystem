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
        $data->UserID=$info->id;
        $data->hotelID=$info->hotelID;
        $data->hotelName=$info->hotelName;
        $data->created_at =$info->created_at;

        $data->save();

        $info->delete();

        Alert::success('Good job!')->persistent("Close");
        return view('customer.success');
    }

    function deleteReq($id)
    {
        $info=RequestCustomer::find($id);
        $info->delete();

        return view('provider.request');
    }

}
