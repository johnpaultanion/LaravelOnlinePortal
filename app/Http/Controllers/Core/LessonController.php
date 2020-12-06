<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Lesson;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

use DB;

class LessonController extends Controller
{
    public function index(){

        
        $lessons = Lesson::orderBy('created_at','desc')->paginate(10);
        return view('containers.core.lessons.index')->with('lessons', $lessons);

    }
}
