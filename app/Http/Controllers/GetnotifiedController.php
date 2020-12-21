<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\getnotified;
use Illuminate\Http\Request;

class GetnotifiedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homepage/index');
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
        $this->validate($request, [
            'emailnotified' => ['required', 'string', 'max:255' , 'email' , 'unique:getnotifieds'],
        ]);

        $get = new getnotified;
        $get->emailnotified = $request->input('emailnotified');
        $get->save();
        return redirect('/')->with('subcribe', 'Thank you for subscribing to our newsletter.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\getnotified  $getnotified
     * @return \Illuminate\Http\Response
     */
    public function show(getnotified $getnotified)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\getnotified  $getnotified
     * @return \Illuminate\Http\Response
     */
    public function edit(getnotified $getnotified)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\getnotified  $getnotified
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, getnotified $getnotified)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\getnotified  $getnotified
     * @return \Illuminate\Http\Response
     */
    public function destroy(getnotified $getnotified)
    {
        //
    }
}
