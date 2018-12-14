<?php

/**
      created by zahid Hossain
      Date: 09/12/2018
*/

namespace App\Http\Controllers;

use App\Hotel;
use App\Hotel_post;

use Illuminate\Http\Request;

class hotelPostController extends Controller
{
    public function index(Request $request)
    {
    	$hotels=Hotel_post::all();
       
    	return view('HotelPost.index')->with('hotels',$hotels);
    }

    public function search(Request $request)
    {
    	$location = $request->location;
    	$checkIn = $request->checkIn;
    	$checkOut = $request->checkOut;
    	$person = $request->person;
    	$singleRoom = $request->singleRoom;
    	$twoPerRoom = $request->twoPerRoom;
    	$fourPerRoom = $request->fourPerRoom;

    	

    	$hotels = Hotel_post::where([['location', '=', $location],['singleRoom', '>=', $singleRoom],['twoPerRoom', '>=', $twoPerRoom],['fourPerRoom', '>=', $fourPerRoom]])
    						->orWhere('location',$location)

    						->get();

    	return view('HotelPost.show')->with('hotels',$hotels);
    }

    public function book(Request $request,$id)
    {
    	$book = Hotel_post::find($id);

    	return view('HotelPost.book')->with('book',$book);
    }
}
