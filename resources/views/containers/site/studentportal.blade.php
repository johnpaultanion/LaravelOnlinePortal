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
                 

                    <div class="col-md-12 mt-2">
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::open(['route' => 'search']) !!}
                                    <div class="form-row">
                                    <div class="col-6 col-md-9 mb-md-0">
                                        {!! Form::text('query', '',['class' => 'form-control form-control-lg', 'placeholder' => 'Search a lessons']) !!}
                                    </div>
                                    <div class="col-6 col-md-3">
                                    {!! Form::submit('Search!', ['class'=>'btn btn-block btn-lg btn-primary']) !!}
                                    </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 bg-white mt-3">
                        <div class="row">

                        <div class="col-md-1">
                        <a href="/site/studentportal1"  class="btn btn-primary">All</a>
                        </div>

                        

                        </div>
                      
                       
                       
                    </div>

                    <div class="col-md-12">
                    
                            <h3 class="text-center pb-2">Our Lessons</h3>
                            <div class="container">
                                    <div class="row">
                                        
                                    @if (count($lessons))

                                            @forelse ($lessons as $lesson)
                                                
                                                    <div class="viewlecture col-md-3 card lessoncard">
                                                        
                                                            
                                                        <img class="card-img-top" style="height: 10rem;"  src="/filestorage/thumbnail/{{$lesson->thumbnail}}" alt="Card image cap" />
                                                            
                                                        <a href="/site/{{$lesson->id}}"  class="btn btn-primary">
                                                            View Lesson
                                                        </a>

                                                        <div class="card-body">
                                                        
                                                            
                                                                        <b>
                                                                        {!! link_to_route('lessons.show', $lesson->title, $lesson->id) !!}
                                                                        </b>

                                                                        <p>
                                                                        {{\Illuminate\Support\Str::limit($lesson->description,20)}}<a  href="/site/{{$lesson->id}}">
                                                                        Read more...
                                                                        </a>
                                                                        </p>
                                                           
                                                           
                                                            </div>
                                                        
                                                    </div>
                                                
                                                @empty
                                                <tr>No result found</tr>
                                                @endforelse
                                    


                                    @endif

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