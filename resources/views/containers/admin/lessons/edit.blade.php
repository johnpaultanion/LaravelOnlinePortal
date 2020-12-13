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
        <h3 class="card-title">Edit a Lesson - {{$lesson->title}}</h3>
        </div>

        <div class="card">
         <div class="card-body ">

         {!! Form::open(['action' => ['App\Http\Controllers\Admin\LessonController@update', $lesson->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', $lesson->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', $lesson->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                </div>
                <div class="form-group">
                    {{Form::label('thumbnail', 'Thumbnail')}}<br>
                    {{Form::file('thumbnail')}}
                    <i>{{$lesson->thumbnail}}</i>
                </div>
                <div class="form-group">
                    <label for="category-content">Select a Category - <code>{{$lesson->category->name}}</code> </label>
                    <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                </div>

                {{Form::hidden('_method','PUT')}}
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

