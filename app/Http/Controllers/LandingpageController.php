<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class LandingpageController extends Controller
{
    public function index(){
       
       
    }
    

    public function enrollment(){
       
        return view('enrollnow');
    }


    public function create()
    {
        return view('enrollment.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'school' => ['required'],
            'school_address' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile_number' => ['required', 'size:11', 'unique:users'],
            'yeargrad' => ['required'],

        ]);

        $credentials = [
            'name' => $request->name,
            'school' => $request->school,
            'school_address' => $request->school_address,
            'email' => $request->email,
            'mobile_number' =>  $request->mobile_number,
            'yeargrad' => $request->yeargrad,
         
        ];
  
        User::create($credentials);
   
        return redirect('enrollment/create')->with('success', 'you will be notified when we open our enrollment');





    }

   
}
