<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\SectionVideo;
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

    public function viewlecture($id)
    { 
        
        $lesson = Lesson::find($id);
        $section_videos = SectionVideo::where('lesson_id', $id)->paginate(1);
        $section_videosalls = SectionVideo::all();
        $lessons = Lesson::orderBy('created_at','desc')->paginate(4);
       
        
        // return view('containers.site.viewlecture')->with('lesson', $lesson);
        return view('containers.site.viewlecture',['lesson'=>$lesson, 'section_videos'=>$section_videos , 'section_videosalls'=>$section_videosalls , 'lessons'=>$lessons]);

        
    }
    public function viewvideos($video_id){

        $section_video = SectionVideo::find($video_id);
        $section_videos = SectionVideo::all();
        $lessons = Lesson::orderBy('created_at','desc')->paginate(4);

        return view('containers.site.viewvideos.viewvideo',['section_video'=>$section_video , 'section_videos'=>$section_videos , 'lessons'=>$lessons]);

    }
    
}
