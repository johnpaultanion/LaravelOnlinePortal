@extends('../layouts.app')

{{-- @section('third_party_stylesheets')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">



@endsection --}}

@section('navbarvideos')
    @include('../components.site.navbarvideos')
@endsection



@section('main-content')



    <div class="bg-light" style="height: 100vh">

    <section class="page-section bg-white">
        <div class="container">
            <div class="row">

                    <div class="col-md-8">
                   
                        <iframe src="{{$section_video->url}}" width="100%" height="400" frameborder="0"></iframe>

                        <b>{{$section_video->lesson->title}}</b>                
                        <p>
                        {{\Illuminate\Support\Str::limit($section_video->lesson->description,50)}} <br><a href="">
                          Read more...
                        </a>

                    </div>

                    <div class="col-md-4 ">

                       <div class="col-md-12 scrollable flex-nowrap">
                                <div class="row">
                                <div class="col-md-12">
                                <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin p-3">
                                    <b class="text-md-left ">Suggested Videos</b><br>

                                    @forelse ($section_videos as $section_video)
                                    <div class="card">
                                        <div class="row">
                                         <a href="/site/viewvideos/{{$section_video->id}}">
                                                <div class="col-md-12 p-3">

                                                    <b>{{$section_video->lesson->title}}</b>
                                                    <p>{{$section_video->title}}</p>

                                                </div>
                                          </a>
                                        </div>

                                    </div>
                                    @empty
                                        <tr>No Result Found</tr>
                                    @endforelse






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

                            <img class="card-img-top" style="height: 10rem;"  src="{{$lesson->url}}" alt="Card image cap" />
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
                        @if($comment_videos->count() > 0 ) 
                             <b>{{ count($comment_videos) }} Comments</b><br>
                        @else
                             <b>No Comments</b><br>
                        @endif
                        <div class="col-12">
     
                                    {!! Form::open(['action' => 'App\Http\Controllers\Site\CommentVideoController@store', 'method' => 'POST']) !!}
                                        <input type="hidden" name="video_id" id="video_id" value="{{ request()->route('video_id') }}"/>    
                                        <div class="input-group mt-2">
                                            
                                            <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" name="comment" required autofocus placeholder="Commenting publicity as {{ Auth::user()->name }}">
                                            <div class="input-group-append">
                                              {{Form::submit('Submit', ['class'=>'btn btn-info'])}}
                                            </div>
                                            
                                            @error('comment')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                           
                                        </div>

                                       
                                    {!! Form::close() !!}
                                   

                            </div><hr>
                            @include('inc.messages')
                                @forelse ($comment_videos as $comment_video)
                                    <div class="input-group mb-3 p-2">


                                        <i class="far fa-user p-2" ></i>
                                        <b class="mt-1">{{$comment_video->name}} - {{$comment_video->created_at}}</b>

                                        <div class="col-md-12 pt-2 text-md-12">
                                        <p>{{$comment_video->comment}}</p>
                                        </div>
                                    </div> <hr>
                                @empty
                                     <tr>No Result Found</tr>
                                @endforelse

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



@section('footer')
    @include('../components.site.footer')
@endsection
