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
            'thumbnail' => 'required|max:1999',
            'video_name' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'
            

            
            
        ]);

        $userid = auth()->user()->id;

        if($request->hasFile('thumbnail')){

           
        
            $filenameWithExt = $request->file('thumbnail')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'_'.$userid.'.'.$extension;
            // Upload Image
            $path = $request->file('thumbnail')->storeAs('public/thumbnail', $fileNameToStore);
		
		
        } else {
            $fileNameToStore = 'nothumbnail.jpg';
        }

        

         // Create lesson
         $lesson = new Lesson;
         $lesson->title = $request->input('title');
         $lesson->description = $request->input('description');
         $lesson->thumbnail = $fileNameToStore;



         if($request->hasFile('video_name')){
        
            $filenameWithExt = $request->file('video_name')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('video_name')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStoreV= $filename.'_'.time().'_'.$userid.'.'.$extension;
            // Upload Image
            $path = $request->file('video_name')->storeAs('public/video_file', $fileNameToStoreV);
		
		
        } else {
            $fileNameToStoreV = 'novideo.mp4';
        }




         $lesson->video_name = $fileNameToStoreV;
         $lesson->user_id = auth()->user()->id;
       
         $lesson->save();
 
         return redirect('admin/lessons')->with('success', 'Lesson Created');

        
     





    }



}
