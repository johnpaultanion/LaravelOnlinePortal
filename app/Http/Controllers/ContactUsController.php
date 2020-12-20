<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Getnotifieds;
use Illuminate\Http\Request;
use Validator;
use Redirect;
use Response;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('homepage/contact');
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
            'name' => 'required',
            'email' => ['required', 'string', 'max:255' , 'email' , 'unique:contact_us'],
            'mobile_number' => ['required', 'size:11', 'unique:contact_us'],
            'message' => ['required', 'string'],
        ]);

        $contactus = new ContactUs;
        $contactus->name = $request->input('name');
        $contactus->email = $request->input('email');
        $contactus->mobile_number = $request->input('mobile_number');
        $contactus->message = $request->input('message');
       
       
        $contactus->save();
        return redirect('/contact')->with('success', ' Your message has been sent successfully, I hope to respond within 24 hours. You can also contact us through social media, links can be found below!');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
