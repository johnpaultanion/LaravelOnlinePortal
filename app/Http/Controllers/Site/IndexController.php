<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\SectionVideo;
use App\Models\CommentVideo;
use \Illuminate\Support\Str;

class IndexController extends Controller
{
    public function index(Request $request){


         $query = $request->get('query');

         $lessons = Lesson::where('title', 'LIKE', "%$query%")
                     ->orWhere('description', 'LIKE', "%$query%")
                     ->get();

        
        return view('containers.site.studentportal')->with('lessons', $lessons);


        
       
        // $lessons = Lesson::all();
        // return view('containers.site.studentportal')->with('lessons', $lessons);
    }

    public function viewlecture(Request $request, $id)
    {

     
        $section_videos = SectionVideo::where('lesson_id', $id)->get();
        return view('containers.site.viewlecture')->with('section_videos', $section_videos);
        
        
    }


    public function viewvideos($video_id){

        $section_video = SectionVideo::find($video_id);
        $section_videos = SectionVideo::all();
        $comment_videos = CommentVideo::where('video_section_id', $video_id)
                                        ->orderBy('created_at','desc')
                                        ->get();

        $lessons = Lesson::orderBy('created_at','desc')->paginate(8);

        return view('containers.site.viewvideos.viewvideo',['section_video'=>$section_video , 'section_videos'=>$section_videos , 'lessons'=>$lessons , 'comment_videos'=>$comment_videos]);

    }

    
}
