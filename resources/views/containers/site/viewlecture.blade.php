@extends('layouts.app')

@section('navbar')
    @include('../components.site.navbar')
@endsection

@section('main-sidebar')
    @include('../components.site.main-sidebar')
@endsection

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ">
                                <h3 class="login-box-msg text-info p-2"><b>Choose Available Videos</b></h3>
                             
                                   
                                       @forelse ($section_videos as $section_video)
                                                
                                               
                                                <div class="card col-8 mt-4 mx-auto lessoncard viewlecture">
                                                    <a href="/site/viewvideos/{{$section_video->id}}">
                                                        <div class="card-body">
                                                            <b>
                                                            Video Title: {{$section_video->title}}
                                                            </b>
                                                            <p>
                                                            Lesson Title: {{$section_video->lesson->title}}
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                                
                                            
                                        @empty
                                        <b class="text-center">No Available Videos in this lesson</b>
                                        @endforelse
                    </div>
                </div>
            </div> 
        </section>
        <!-- /.content -->

        <div class="loading"></div>
    </div>
    <!-- /.content-wrapper -->
@endsection



@section('footer')
    @include('../components.site.footer')
@endsection