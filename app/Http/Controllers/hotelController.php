<?php

/**
      created by zahid Hossain
      Date: 09/12/2018
*/

namespace App\Http\Controllers;

use App\Hotel;
use App\Hotel_post;
use Illuminate\Http\Request;


class hotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hotels=Hotel::take(8)
                ->get();
        
    	return view('Hotels.index')->with('hotels',$hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(hotel $hotel)
    {
        $hotel = session('hotel');
        $hotels = Hotel::where('email', '=', $hotel)
                        ->get();

        return view('Hotels.profile')->with('hotels',$hotels);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $hotel = Hotel::find($id);
        return view('Hotels.profileEdit')->with('hotel',$hotel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotel $hotel)
    {
        //
    }

    public function search(Request $request)
    {
        // $location = $request->location;
        // $price = $request->price;

        // $hotels = Hotel::where('location', '=', $location)
        //                 ->get();

        // return view('Hotels.show')->with('hotels',$hotels);


        if($request->query)
        {
            $query = $request->query;
            $hotels = Hotel::where('location', '=', $query)
                        ->get();

            $output = '<div class="col-md-6 col-lg-6 mb-4 ftco-animate">';
            foreach($hotels as $hotel)
            {
                $output.='<div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                  <a href="#" class="block-5" style="">
                    <div class="text">
                      <span class="price">${{$hotel->price}}/night</span>
                      <h3 class="heading">{{$hotel->hotel_name}}</h3>
                      <div class="post-meta">
                        <span>{{$hotel->location}}</span>
                      </div>
                      <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                    </div>
                  </a>
                </div>';
            }
            echo $output;
            console.log($request->query);
        }




    }
    public function autocomplete(Request $request)
    {
        $term = $request->term;
        $hotels = Hotel::where('location','=',$item)
                        ->get();
    }
}
