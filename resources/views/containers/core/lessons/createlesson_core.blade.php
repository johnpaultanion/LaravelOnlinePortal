@extends('layouts.app')

@section('navbar')
    @include('../components.core.navbar')
@endsection

@section('main-sidebar')
    @include('../components.core.main-sidebar')
@endsection

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">

        @include('inc.messages')

        <div class="card-header">
        <h3 class="card-title">Create A new lesson - Super Admin</h3>
        </div>

        <div class="card">
         <div class="card-body ">
            {!! Form::open(['action' => 'App\Http\Controllers\Core\LessonController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                </div>

                

                <div class="form-group">
                    {{Form::label('thumbnail', 'Thumbnail')}}<br>
                    {{Form::file('thumbnail')}}
                </div>
                <div class="form-group">
                    {{Form::label('video_name', 'Video File')}}<br>
                    {{Form::file('video_name')}}
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
            </div>
        </div>
                

        </section>
        <!-- /.content -->

        <div class="loading"></div>
    </div>
    <!-- /.content-wrapper -->
@endsection

