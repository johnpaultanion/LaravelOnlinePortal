<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use DB;


class LandingpageController extends Controller
{
    public function index(){
       
        return view('landingpage');
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
        $this->validate($request, [
            'name' => 'required',
            'school' => 'required',
            'schooladdress' => 'required',
            'email' => 'email|required',
            'mobilenumber' => 'required',
            'yeargraduated' => 'required',

            
            
        ]);

        $student = new User;
        $student->name = $request->input('name');
        $student->school = $request->input('school');
        $student->school_address = $request->input('schooladdress');
        $student->email = $request->input('email');
        $student->mobile_number = $request->input('mobilenumber');
        $student->yeargrad = $request->input('yeargraduated');
        $student->role = "student";
        
        $student->save();

        return redirect('enrollment/create')->with('success', 'You have successfully enrolled!');


    }

   
}
