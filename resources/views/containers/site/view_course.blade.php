@extends('../layouts.app')

{{-- @section('third_party_stylesheets')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  
  

@endsection --}}

@section('navbar')
    @include('../components.site.navbar')
@endsection



@section('main-content')


    <div class="bg-light" style="height: 100vh">

  
        <section class="content"> 

    <div class="row">
    
        <div class="col-md-8 m-2">
            <div class="card">
                    <video id="my_video_1" class="video-js vjs-default-skin" height="550px"
                        controls preload="none" poster='http://video-js.zencoder.com/oceans-clip.jpg'
                        data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
                    <source src="/storage/video_file/{{$lesson->video_name}}" type='video/mp4' />
                    </video>
    
                    <hr>
                    

                    {{$lesson->title}} <br>
                    {{$lesson->description}} <br>
                    {{$lesson->created_at}}
            </div> 

            <div class="card">
            

              <div class="card-body ">
                    {!! Form::open(['action' => 'App\Http\Controllers\Admin\LessonController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        
                        <div class="form-group">
                            {{Form::label('comment', '  Send a Comment')}}
                            {{Form::textarea('send_comment', '', ['id' => 'article-ckeditor', 'class' => 'form-control',  'style' => 'height: 80px;', 'placeholder' => 'Type a text'])}}
                        </div>
                      
                        {{Form::submit('Submit', ['class'=>'btn btn-info pull-right'])}}
                    {!! Form::close() !!}
               </div>

            </div>



           

            <div class="d-md-flex">
              <div class="overflow-auto bg-light" style="width: 1060px; height: 500px;">
                
                    <div class="card">
                      <div class="card-body ">
                          <b> Johnpaul Tanion</b> - <i>Student</i> <br>
                          
                          <small>Sample Comment Sample Comment Sample Comment</small>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-body ">
                          <b> Johnpaul Tanion</b> - <i>Student</i> <br>
                          
                          <small>Sample Comment Sample Comment Sample Comment Sample Comment Sample Comment</small>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-body ">
                          <b> Johnpaul Tanion</b> - <i>Student</i> <br>
                          
                          <small>Sample Comment Sample Comment Sample Comment Sample Comment Sample Comment</small>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-body ">
                          <b> Johnpaul Tanion</b> - <i>Student</i> <br>
                          
                          <small>Sample Comment Sample Comment Sample Comment Sample Comment Sample Comment</small>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-body ">
                          <b> Johnpaul Tanion</b> - <i>Teacher</i> <br>
                          
                          <small>Sample Comment Sample Comment Sample Comment Sample Comment Sample Comment</small>
                      </div>
                    </div>


              </div>
      
            </div>



        </div>

        <div class="col-md-3">
        <p>Suggested Course</p>
        
            <div class="row">
                
                <div class="col-md-12 m-2">
                
                     <div class="card">
                        <img class="card-img-top" src="/storage/thumbnail/{{$lesson->thumbnail}}" alt="Card image"  >
                        <div class="card-body">
                          <h4 class="card-title">{{$lesson->title}}</h4>
                          <p class="card-text">{{$lesson->description}}</p>
                          <a href="/site/{{$lesson->id}}" class="btn btn-info">View Course</a>
                         
                        </div>
                      </div>

                      <div class="card">
                        <img class="card-img-top" src="/storage/thumbnail/{{$lesson->thumbnail}}" alt="Card image"  >
                        <div class="card-body">
                          <h4 class="card-title">{{$lesson->title}}</h4>
                          <p class="card-text">{{$lesson->description}}</p>
                          <a href="/site/{{$lesson->id}}" class="btn btn-info">View Course</a>
                         
                        </div>
                      </div>

                      <div class="card">
                        <img class="card-img-top" src="/storage/thumbnail/{{$lesson->thumbnail}}" alt="Card image"  >
                        <div class="card-body">
                          <h4 class="card-title">{{$lesson->title}}</h4>
                          <p class="card-text">{{$lesson->description}}</p>
                          <a href="/site/{{$lesson->id}}" class="btn btn-info">View Course</a>
                         
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

   

@endsection