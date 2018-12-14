<?php

/**
      created by zahid Hossain
      Date: 09/12/2018
*/
namespace App\Http\Controllers;

use App\signUp;
use Illuminate\Http\Request;

use App\User;

class signUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Reg.user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hotel()
    {
        return view('Reg.hotel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = new User();
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->address=$request->address;
        $user->mobile=$request->mobile;

        if($request->hasfile('image')){
            $file=$request->file('image');
            $file->move(public_path().'/',$file->getClientOriginalName());
            $user->img=$file->getClientOriginalName();
        }

        $user->save();

        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\signUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function show(signUp $signUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\signUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function edit(signUp $signUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\signUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, signUp $signUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\signUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(signUp $signUp)
    {
        //
    }
}
