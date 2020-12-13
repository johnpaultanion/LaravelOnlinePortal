<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Category;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use File;
use DB;

class LessonController extends Controller
{
    public function index(){

        
        $lessons = Lesson::orderBy('created_at','desc')->paginate(10);
        return view('containers.admin.lessons.index')->with('lessons', $lessons);

    }

    public function create($category_id = null)
    {

        $categories = null;
        if(!$category_id){
            $categories = Category::all();
        }   

        return view('containers.admin.lessons.create',['category_id'=>$category_id, 'categories'=>$categories]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|max:5999',
            'category_id' => 'required'
            
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
            $path = $request->file('thumbnail')->move(public_path('/filestorage/thumbnail'), $fileNameToStore);
            
            // Create lesson
            $lesson = new Lesson;
            $lesson->title = $request->input('title');
            $lesson->description = $request->input('description');
            $lesson->thumbnail = $fileNameToStore;
            $lesson->user_id = auth()->user()->id;
            $lesson->category_id = $request->input('category_id');
            $lesson->save();
            return redirect('admin/lessons')->with('success', 'Lesson Created');
        } 
    }


    public function show($id)
    {
        $lesson = Lesson::find($id);
        return view('containers.admin.lessons.show')->with('lesson', $lesson);
        
    }

    public function edit($id , $category_id = null)
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

        $categories = null;
        if(!$category_id){
            $categories = Category::all();
        }   

        return view('containers.admin.lessons.edit',['category_id'=>$category_id, 'categories'=>$categories])->with('lesson', $lesson);
    }

   public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
           
            
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
            $path = $request->file('thumbnail')->move(public_path('/filestorage/thumbnail'), $fileNameToStore);
            // Delete file if exists
            File::delete(public_path('/filestorage/thumbnail/'.$lesson->thumbnail));
        }

        // Update Post
        $lesson->title = $request->input('title');
        $lesson->description = $request->input('description');
        if($request->hasFile('thumbnail')){
            $lesson->thumbnail = $fileNameToStore;
        }
        $lesson->category_id = $request->input('category_id');
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
            File::delete(public_path('/filestorage/thumbnail/'.$lesson->thumbnail));
        }
        $lesson->delete();
        return redirect('admin/lessons')->with('success', 'Lesson Removed');

    }



}


