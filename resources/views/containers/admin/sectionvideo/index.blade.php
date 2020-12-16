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
        <h3 class="card-title">Add a videos</h3>
        </div>

        <div class="card">
         <div class="card-body ">
            {!! Form::open(['action' => 'App\Http\Controllers\Admin\SectionVideoController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                
                
                <div class="form-group">

                    <label for="section-content">Select Section</label>

                    <select name="section_id" class="form-control">
                    
                        <option value="">test1</option>
                        <option value="">test2</option>

                    </select>

                </div>


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

