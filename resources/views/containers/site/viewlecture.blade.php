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

             
                  
                   

                    <div class="col-md-12">
                    
                            <h3 class="text-center pb-2">Availble Videos</h3>
                            <div class="container">
                                    <div class="row">
                                        
                             
                                                
                                                    <div class="viewlecture col-md-3 card lessoncard">
                                                        
                                                            
                                                            
                                                @forelse($section_videos as $section_video)
                                                    
                                                     <p>{{$section_video -> title}}</p>
                                                     
                                                     <p>{{$section_video -> video_name}}</p>
                                                        
                                                    
                                                
                                                @empty
                                                <tr>No result found</tr>
                                                @endforelse
                                    


                                                </div>

                                    </div>
                            </div>







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