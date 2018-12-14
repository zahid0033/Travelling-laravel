<?php

namespace App\Http\Controllers;

use App\signUp;
use Illuminate\Http\Request;

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
        //
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
