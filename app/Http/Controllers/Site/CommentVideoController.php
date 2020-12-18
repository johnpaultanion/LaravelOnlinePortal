<?php


namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use App\Models\CommentVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use DB;
use DataTables;
use Validator;

class CommentVideoController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated =  Validator::make($request->all(), [
            'comment' => ['required', 'string'],
            'video_id' =>['required', 'string']
        ]);

        if ($validated->fails()) {
            return response()->json(['errors' => $validated->errors()]);
        }
        $video_id = $request->input('video_id');

        $credentials = [
            'comment' => $request->input('comment'),
            'video_section_id' => $video_id,
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name, 
            
        ];

        CommentVideo::create($credentials);

        return redirect('site/viewvideos/'.$video_id)->with('success', 'Comment Added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommentVideo  $commentVideo
     * @return \Illuminate\Http\Response
     */
    public function show(CommentVideo $commentVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommentVideo  $commentVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentVideo $commentVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CommentVideo  $commentVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentVideo $commentVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommentVideo  $commentVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentVideo $commentVideo)
    {
        //
    }
}
