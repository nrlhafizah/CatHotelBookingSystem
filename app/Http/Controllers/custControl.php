<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\TestModel;
use App\view;
use Illuminate\Support\Facades\Route;
use Validator, Redirect;

use Session;
use App\Models\Booking;
use App\Models\Search;

class custControl extends Controller
{
      function addProject(Request $req)
    {

        $newBook= new Booking;

        $newBook->name=$req->name;
        $newBook->email=$req->email;
        $newBook->phoneNumber=$req->no;
        $newBook->totalCats=$req->cats;
        $newBook->checkIn=$req->in;
        $newBook->checkOut=$req->out;
        $newBook->save();

        return redirect('create');
    }

    function show()
    {
        return view("customer.profile");
    }

    function display()
    {
        return view("customer.display");
    }


}
