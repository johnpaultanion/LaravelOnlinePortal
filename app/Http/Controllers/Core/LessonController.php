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


    public function create()
    {
        return view('containers.core.lessons.createlesson_core');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|max:1999'
        ]);

        $userid = auth()->user()->id;

        if($request->hasFile('thumbnail')){
        
            $filenameWithExt = $request->file('thumbnail')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'_'.$userid.'.'.$extension;
            $path = $request->file('thumbnail')->move(public_path('/filestorage/thumbnail'), $fileNameToStore);
            
            
         $lesson = new Lesson;
         $lesson->title = $request->input('title');
         $lesson->description = $request->input('description');
         $lesson->thumbnail = $fileNameToStore;
         $lesson->user_id = auth()->user()->id;
         $lesson->save();
         return redirect('admin/lessons')->with('success', 'Lesson Created');		
        }
        
     





    }



}
