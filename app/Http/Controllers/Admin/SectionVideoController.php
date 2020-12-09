<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SectionVideo;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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

         ]);

         $userid = auth()->user()->id;

         if($request->hasFile('video_name')){
           foreach ($request->video_name as $file){

                 $filenamewext = $file->getClientOriginalName();
                 $filename = pathinfo($filenamewext, PATHINFO_FILENAME);
                 $extension = $file->getClientOriginalExtension();

                 $fileNameToStore= $filename.'_'.time().'_'.$userid.'.'.$extension;
                 $path = $file->storeAs('public/video_file', $fileNameToStore);

                 $save = new SectionVideo;
                 $save->video_name = $fileNameToStore;

                 $save->title = "title";
                 $save->section_id =  $request->input('section_id');


                 $save->save();
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
