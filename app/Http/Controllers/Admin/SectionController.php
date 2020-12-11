<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lesson_id = null)
    {
        $lessons = null;
        if(!$lesson_id){
            $lessons = Lesson::all();
        }   

        return view('containers.admin.sections.create',['lesson_id'=>$lesson_id, 'lessons'=>$lessons]);
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
            'name' => 'required',
            'lesson_id' => 'required',
            
        ]);

        // Create Category
         $section = new Section;
         $section->name = $request->input('name');
         $section->lesson_id = $request->input('lesson_id');
         $section->user_id = auth()->user()->id;
       
         $section->save();
 
         return redirect('admin/lessons')->with('success', 'Section Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        //
    }
}
