<?php

namespace App\Http\Controllers\Admin;

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
        return view('containers.admin.lessons.index')->with('lessons', $lessons);

    }

    public function create()
    {
        return view('containers.admin.lessons.create');
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


    public function show($id)
    {
        $lesson = Lesson::find($id);
        return view('containers.admin.lessons.show')->with('lesson', $lesson);
        
    }

    public function edit($id)
    {
        $lesson = Lesson::find($id);
        
        //Check if post exists before deleting
        if (!isset($lesson)){
            return redirect('admin/lessons')->with('error', 'No Lesson Found');
        }

        // Check for correct user
        if(auth()->user()->id !=$lesson->user_id){
            return redirect('admin/lessons')->with('error', 'Unauthorized Page');
        }

        return view('containers.admin.lessons.edit')->with('lesson', $lesson);
    }

   public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'nullable|max:1999',
            'video_name' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|nullable'
            

            
            
        ]);


        $lesson = Lesson::find($id);
        $userid = auth()->user()->id;
        
        if($request->hasFile('thumbnail')){
            // Get filename with the extension
            $filenameWithExt = $request->file('thumbnail')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'_'.$userid.'.'.$extension;
            // Upload Image
            $path = $request->file('thumbnail')->storeAs('public/thumbnail', $fileNameToStore);
            // Delete file if exists
            Storage::delete('public/thumbnail/'.$lesson->thumbnail);
		
        }

        // Update Post
        $lesson->title = $request->input('title');
        $lesson->description = $request->input('description');

        if($request->hasFile('thumbnail')){
            $lesson->thumbnail = $fileNameToStore;
        }


        if($request->hasFile('video_name')){
            // Get filename with the extension
            $filenameWithExt = $request->file('video_name')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('video_name')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'_'.$userid.'.'.$extension;
            // Upload Image
            $path = $request->file('video_name')->storeAs('public/video_file', $fileNameToStore);
            // Delete file if exists
            Storage::delete('public/video_file/'.$lesson->video_name);
		
        }

        if($request->hasFile('video_name')){
            $lesson->video_name = $fileNameToStore;
        }


        $lesson->save();

        return redirect('/admin/lessons')->with('success', 'Lesson Updated');




    }

    public function destroy($id)
    {

        $lesson = Lesson::find($id);
        
        //Check if post exists before deleting
        if (!isset($lesson)){
            return redirect('admin/lessons')->with('error', 'No Lesson Found');
        }

        // Check for correct user
        if(auth()->user()->id !=$lesson->user_id){
            return redirect('admin/lessons')->with('error', 'Unauthorized Page');
        }

        if($lesson->thumbnail != 'nothumbnail.jpg'){
            // Delete Image
            Storage::delete('public/thumbnail/'.$lesson->thumbnail);
        }

        if($lesson->video_name != 'novideo.mp4'){
            // Delete Vid
            Storage::delete('public/video_file/'.$lesson->video_name);
        }
        
        $lesson->delete();
        return redirect('admin/lessons')->with('success', 'Lesson Removed');

    }



}


