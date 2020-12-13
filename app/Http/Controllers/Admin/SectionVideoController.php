<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SectionVideo;
use App\Models\Section;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use File;

class SectionVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $section_id = null)
    {

        $sections = null;
        if(!$section_id){
            $sections = Section::all();
        }

        return view('containers.admin.sectionvideo.create',['section_id'=>$section_id, 'sections'=>$sections]);
    }

    public function createvids($id , $section_id = null)
    {

         $lesson_id = Lesson::find($id);

         $sections = null;
         if(!$section_id){
             $sections = Section::all();
         }

        
        $lesson = Lesson::find($id);
        return view('containers.admin.sectionvideo.createvids',['lesson'=>$lesson_id,'section_id'=>$section_id, 'sections'=>$sections])->with('lesson', $lesson);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $this->validate($request, [

             'section_id' => 'required',
             'video_name' => 'required',
         ]);

         $userid = auth()->user()->id;

         if($request->hasFile('video_name')){
           foreach ($request->video_name as $file){

            if (false !== mb_strpos($file->getMimeType(), "video")) {
                $filenamewext = $file->getClientOriginalName();
                $filename = pathinfo($filenamewext, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();

                $fileNameToStore= $filename.'_'.time().'_'.$userid.'.'.$extension;
                $path = $file->move(public_path('/filestorage/videofile'), $fileNameToStore);
                $save = new SectionVideo;
                $save->video_name = $fileNameToStore;
                $save->title = "title";
                $save->section_id =  $request->input('section_id');
                $save->lesson_id =  $request->input('lesson_id');
                $save->save();
             }else{

                return redirect('admin/sectionvideo/createvids')->with('error', 'The Video File, is not a video. must be a file of type: mp4, ogx, oga, ogv, ogg, webm');

             }
                
             }
         }





        return redirect('admin/lessons')->with('success', 'Successfully Added a Videos');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SectionVideo  $sectionVideo
     * @return \Illuminate\Http\Response
     */
    public function show(SectionVideo $sectionVideo)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectionVideo  $sectionVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(SectionVideo $sectionVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SectionVideo  $sectionVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SectionVideo $sectionVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionVideo  $sectionVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionVideo $sectionVideo)
    {
        //
    }
}
