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

class provControl extends Controller
{
    function update()
    {
        return view("provider.edit");
    }

    function show1()
    {
        return view("provider.profile");
    }

    function reqBook()
    {
        return view("provider.request");
    }
}
