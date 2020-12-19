<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Category;
use App\Models\User;
use App\Models\Section;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use File;
use DB;
use Validator;
use Redirect;
use Response;

use Yajra\DataTables\Facades\DataTables;


class LessonController extends Controller
{
    public function index(request $request){

        //$lessons = Lesson::all();
        //return view('containers.admin.lessons.index')->with(compact(['lessons']));
       
    
        if ($request->ajax()) {
            $data = Lesson::all();

            return DataTables::of($data)
                ->addColumn('user_id', function ($data) {
                    return $data->user ? $data->user['name'] : 'Deleted';
                })
                ->addColumn('category', function ($data) {
                    return $data->category ? $data->category['name'] : 'Deleted';
                })
                ->addColumn('action', function ($data) {
                    $button = '<button type="button" name="edit" edit="' . $data->id . '" class="edit btn btn-info btn-sm">Edit</button>';
                   
                    $button .= '<button type="button" name="delete" delete="' . $data->id . '" id="' . $data->id . '" class="delete btn btn-danger btn-sm ml-2">Delete</button>';
                    
                    if($data->section_id == ""){
                    $button .= '<button type="button" name="addsection" addsection="' . $data->id . '" id="' . $data->id . '" class="addsection btn btn-info btn-sm ml-2">Add Section</button>';
                    }
                    return $button;
                    $lesson->description = $request->input('description');
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $users = User::all();
        $categories = Category::all();
        
        return view('containers.admin.lessons.lesson')->with(compact(['categories', 'users']));


    }

     public function create($category_id = null)
    {

         $categories = null;
         if(!$category_id){
             $categories = Category::all();
         }   

         return view('containers.admin.lessons.create',['category_id'=>$category_id, 'categories'=>$categories]);
    }

    public function show(Request $request)
    {
        //
    }

   
    public function  storesection(Request $request){

    }

    public function store(Request $request)
    {
        $validated =  Validator::make($request->all(), [
            'category_id' => ['required'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'sectionname' => ['required', 'string', 'max:255'],
           
        ]);

        if ($validated->fails()) {
            return response()->json(['errors' => $validated->errors()]);
        }

        $userid = auth()->user()->id;
        Lesson::create([
           'category_id' => $request->input('category_id'),
           'title' => $request->input('title'),
           'description' => $request->input('description'),
           'user_id' => auth()->user()->id,
           'section_id' => $request->input('sectionname'),
        ]);

        Section::create([
            'name' => $request->input('sectionname'),
            'user_id' => auth()->user()->id,
            'lesson_id' => $lesson_id
         ]);


        return response()->json(['success' => 'Data Added successfully.']);        
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
            //$filenameWithExt = $request->file('thumbnail')->getClientOriginalName();
            // Get just filename
            //$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            //$extension = $request->file('thumbnail')->getClientOriginalExtension();
            // Filename to store
            //$fileNameToStore= $filename.'_'.time().'_'.$userid.'.'.$extension;
            // Upload Image
            Storage::disk('s3')->delete($lesson->thumbnail);
            $path = $request->file('thumbnail')->store('thumbnail', 's3');
            
            // Delete file if exists
            //File::delete(public_path('/filestorage/thumbnail/'.$lesson->thumbnail));
           
        }

        // Update Post
        $lesson->title = $request->input('title');
        $lesson->description = $request->input('description');
        if($request->hasFile('thumbnail')){
            $lesson->thumbnail = $path;
            $lesson->url = Storage::disk('s3')->url($path);
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
            //File::delete(public_path('/filestorage/thumbnail/'.$lesson->thumbnail));
            Storage::disk('s3')->delete($lesson->thumbnail);
        }
        $lesson->delete();
        return redirect('admin/lessons')->with('success', 'Lesson Removed');

    }



}


