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

        @include('inc.messages')

        <div class="card-header">
        <h3 class="card-title">Add a Section</h3>
        </div>

        <div class="card">
         <div class="card-body ">
            {!! Form::open(['action' => 'App\Http\Controllers\Admin\SectionController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                
            <div class="row">


                <div class="col-md-8">
                    <div class="form-group">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                </div>

               


                       
                            <div class="col-md-8">
                            
                             <label for="lesson-content">Select a Lesson</label>
                                <select name="lesson_id" class="form-control">
                                
                                @foreach($lessons as $lesson)
                                    <option value="{{$lesson->id}}">{{$lesson->title}}</option>
                                @endforeach

                                </select>
                            </div>
                            
                        </div>
                    

             
             <br>
                
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
            </div>
            </div>
        </div>
                

        </section>
        <!-- /.content -->

        <div class="loading"></div>
    </div>
    <!-- /.content-wrapper -->
@endsection

