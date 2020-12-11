<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;

class IndexController extends Controller
{
    public function index(){

        $lessons = Lesson::all();
        return view('containers.site.studentportal')->with('lessons', $lessons);;
    }

    public function show($id)
    {
        
    }
}
