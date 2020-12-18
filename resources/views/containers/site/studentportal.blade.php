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
                 

                            <div class="col-md-12  bg-white">
                                <div class="row">
                                    <div class="col-md-12">
                                        {!! Form::open(['route' => 'search']) !!}
                                            <div class="form-row">
                                            <div class="col-6 col-md-9 mb-md-0">
                                                {!! Form::text('query', '',['class' => 'form-control form-control-lg', 'placeholder' => 'Search a lessons']) !!}
                                            </div>
                                            <div class="col-6 col-md-2 mt-1">
                                            {!! Form::submit('Search', ['class'=>'btn btn-block btn-primary']) !!}
                                            </div>
                                            </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-12 ">
                                
                                <h3 class="login-box-msg text-info p-2"><b>Our Lessons</b></h3>
                                 <div class="container">
                                       <div class="row"> 
                                          @if (count($lessons))
                                                @forelse ($lessons as $lesson)
                                                       <a href="/site/{{$lesson->id}}">
                                                            <div id="lessoncard" class="viewlecture col-md-3 card lessoncard">
                                                                <img class="card-img-top" style="height: 10rem;" src="{{$lesson->url}}" alt="Card image cap" />
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
                                                                <a href="/site/{{$lesson->id}}"  class="text-white btn btn-info btn-block btn-sm my-4">
                                                                    View Lesson
                                                                </a>
                                                            
                                                            </div>
                                                        </a>
                                                    
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
