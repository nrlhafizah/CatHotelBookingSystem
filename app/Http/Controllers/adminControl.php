<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Booking;
use App\Models\Search;

class adminControl extends Controller
{
    //Customer Management 
    function custSearch()
    {
        $data = Search::paginate(9);
        return view('admin.customer')->withData($data);
    }

    function custGo()
    {
        $q = (Request::get('q'));
	    if($q != ''){
		$data =Search::where('place','like','%'.$q.'%')->orWhere('detail','like','%'.$q.'%')->paginate(5)->setpath('');
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
        $data = Search::paginate(9);
        return view('admin.provider')->withData($data);
    }

    function provGo()
    {
        $q = (Request::get('q'));
	    if($q != ''){
		$data =Search::where('place','like','%'.$q.'%')->orWhere('detail','like','%'.$q.'%')->paginate(5)->setpath('');
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
        $data = Search::paginate(9);
        return view('admin.request')->withData($data);
    }

    function reqGo()
    {
        $q = (Request::get('q'));
	    if($q != ''){
		$data =Search::where('place','like','%'.$q.'%')->orWhere('detail','like','%'.$q.'%')->paginate(5)->setpath('');
		$data->appends(array(
           'q' => Request::get('q'),
		));
		if(count($data)>0){
			return view('admin.request')->withData($data);
		}
		return view('admin.request')->withMessage("No Results Found!");
	}
    }
}
