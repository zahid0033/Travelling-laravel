<!--
      created by zahid Hossain
      Date: 11/12/2018
-->


@extends('Layouts.layout')

@section('title') Hotel Booking @endsection
        
@section('content')
      
    <p>{{$book->id}}</p>

    <p>{{$book->id}}</p>
    <p>{{$book->location}}</p>
    <p>{{$book->price}}</p>
    <p>{{$book->id}}</p>
    <p>{{$book->id}}</p>




 <form action="" method="post">

                 {{@csrf_field()}}

                  <div class="fields">
                    <div class="row flex-column">

                      <div class="textfield-search col-sm-12 group mb-3"><input type="text" name="location" class="form-control" placeholder="Search Location"></div>

                     
                      <div class="select-wrap col-sm-12 group mb-3">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="person" id="" class="form-control">
                          <option value="">Person</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4+</option>
                        </select>
                      </div>

                      <div class="select-wrap col-sm-12 group mb-3">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="singleRoom" id="" class="form-control" >
                          <option value="null">Single person room</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4+</option>
                        </select>
                      </div>

                      <div class="select-wrap col-sm-12 group mb-3">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="twoPerRoom" id="" class="form-control">
                          <option value="null">Two person room</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4+</option>
                        </select>
                      </div>


                      <div class="select-wrap col-sm-12 group mb-3">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="fourPerRoom" id="" class="form-control">
                          <option value="null">Four Person room</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4+</option>
                        </select>
                      </div>
                      <div class="col-sm-12 group mb-3">
                        <input type="submit" class="search-submit btn btn-primary" value="Find Flights">
                      </div>
                    </div>
                  </div>
                </form>

    
 @endsection
