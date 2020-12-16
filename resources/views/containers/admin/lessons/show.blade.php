@extends('layouts.app')

@section('navbar')
    @include('../components.admin.navbar')
@endsection

@section('main-sidebar')
    @include('../components.admin.main-sidebar')
@endsection

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content"> 


         <div class="card">

        

            <video id="my_video_1" class="video-js vjs-default-skin" height="550px"
                controls preload="none" poster='http://video-js.zencoder.com/oceans-clip.jpg'
                data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
            <source src="/storage/video_file/{{$lesson->video_name}}" type='video/mp4' />
            </video>
            
            <hr>
           
        <div class="card-body ">
            <span class="card-title">

             {{$lesson->title}}
            
             </span>
             </div>
    

        </div>  
      
      


        <div class="card">
         <div class="card-body ">
       

         <h3 class="card-title">
         
         <b>Description: </b>
         
         {{$lesson->description}} 
         
         </h3> <br>

         <h3 class="card-title">

            <b>Date Created:</b> {{$lesson->created_at}}
         
         </h3><br>

       

         </div>

        </div>

       
                

        </section>
        <!-- /.content -->

        <div class="loading"></div>
    </div>
    <!-- /.content-wrapper -->
@endsection

