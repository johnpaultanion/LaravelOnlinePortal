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

             <div class="container-fluid">
                <div class="row">
                    <div class="col-8 offset-2 mt-3">
                        <div class="card">
                            <div class="card-body login-card-body">

                                <p class="login-box-msg text-info"><b>Create a new lesson</b></p>

                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            <strong>Success!</strong> {{ session()->get('success') }}
                                        </div>
                                    @endif

                                    {!! Form::open(['action' => 'App\Http\Controllers\Admin\LessonController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                        
                                        <div class="input-group mb-3">
                                            <p class="btn-block m-0">Title</p>
                                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" required autofocus placeholder="Enter title lesson here">
                                            <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                            </div>
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <p class="btn-block m-0">Description</p>
                                            <textarea  id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autofocus placeholder="Enter description lesson here"></textarea>
                                            <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                            </div>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <p class="btn-block m-0">Thumbnail</p><br>
                                            {{Form::file('thumbnail')}}

                                            @error('thumbnail')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label for="category-content">Select a Category</label>
                                            <select name="category_id" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    
                                        {{Form::submit('Submit', ['class'=>'btn btn-info btn-block btn-sm my-4'])}}
                                    {!! Form::close() !!}
                                   
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

