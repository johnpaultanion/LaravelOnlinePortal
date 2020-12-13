@extends('../layouts.app')

{{-- @section('third_party_stylesheets')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  
  

@endsection --}}

@section('navbar')
    @include('../components.site.navbar')
@endsection



@section('main-content')

  

    <div class="bg-light" style="height: 100vh">

    <section class="page-section bg-white">
        <div class="container">
            <div class="row">
               
                    <div class="col-md-8"> 

                        @foreach ($section_videos as $section_video)
                        <iframe src="/filestorage/videofile/{{$section_video->video_name}}" width="100%" height="400" frameborder="0"></iframe>
                        @endforeach

                        <b>{{$lesson->title}}</b>
                        <p>
                        {{\Illuminate\Support\Str::limit($lesson->description,50)}} <br><a href="">
                          Read more...
                        </a>
                        </p>
                    </div>
                    
                    <div class="col-md-4 ">
                       
                       <div class="col-md-12 scrollable flex-nowrap">     
                                <div class="row">
                                <div class="col-md-12">
                                <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin p-3">
                                    <b class="text-md-left ">Section Name</b><br>
                                    
                                    @foreach ($section_videosalls as $section_videosall)
                                    <div class="card">
                                        <div class="row">
                                        
                                            <div class="col-md-12 p-3">
                                                <a href="/site/viewvideos/{{$section_videosall->id}}">
                                                <b>{{$section_videosall->title}}</b>
                                                <p>{{$section_videosall->video_name}}</p>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                  
                                   
    
                                </div>
                                </div>

                                </div>
                    

                        </div>

                   
                      
                        
                    </div>
                    
                
            </div>

         
            <b>Suggested Lessons</b>

            <div class="row">
                @forelse ($lessons as $lesson)
                    <div class="viewlecture col-md-3 card border-0">
                        <a  href="/site/{{$lesson->id}}">
                            
                        <img class="card-img-top" style="height: 10rem;"  src="/filestorage/thumbnail/{{$lesson->thumbnail}}" alt="Card image cap" />
                        <div class="card-body">
                                    <b>
                                    {{\Illuminate\Support\Str::limit($lesson->title,10)}}
                                    </b>

                                    <p>
                                    {{\Illuminate\Support\Str::limit($lesson->description,20)}} <br><a href="">
                                    Read more...
                                    </a>
                                    </p>
                        </div>
                        </a>
                    </div>
                @empty
                <tr>No result found</tr>
                @endforelse
            </div>

           
            <div class="row">
                    <div class="col-md-12 text-md-left">
                        <hr>
                        <b>50 Comments</b><br>
                        <div class="col-md-12 text-md-left">
                          
                            <div class="input-group mb-3 p-2">
                                <div class="input-group-prepend pr-2">
                                    <img class="rounded-circle" style="width: 40px" src="/img/diez.png" alt="">
                                </div>
                                <input type="text" class="form-control" placeholder="Commenting publicity as John paul Tanion" aria-label="Username" aria-describedby="basic-addon1">
                               
                            </div><hr>

                            <div class="input-group mb-3 p-2">
                                
                                <div class="input-group-prepend pr-2">
                                    <img class="rounded-circle" style="width: 40px" src="/img/diez.png" alt="">
                                </div>
                                <b class="mt-2">Johnpaul Tanion - 12-12-2020</b>
                                
                                <div class="col-md-12 pt-2 text-md-12">
                                <p>Test Comments</p>
                                </div>
                            </div> <hr>
                            
                        </div>
                        
                    </div>

                    <div class="col-md-4">

                    </div>
            </div>
                
            </div>
        </div>

        <div class="loading"></div>
    </section>
    </div>

   

@endsection