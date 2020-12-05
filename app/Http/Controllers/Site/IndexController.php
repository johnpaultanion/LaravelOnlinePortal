<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;

class IndexController extends Controller
{
    public function index(){
       
        $lessons = Lesson::orderBy('created_at','desc')->paginate(10);
        return view('containers.site.index')->with('lessons', $lessons);
    }

    public function show($id)
    {
        $lesson = Lesson::find($id);
        return view('containers.site.view_course')->with('lesson', $lesson);
        
    }
}
