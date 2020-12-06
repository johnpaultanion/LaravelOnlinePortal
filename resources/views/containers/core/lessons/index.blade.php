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
        @include('inc.messages')
        <section class="content">

        <div class="card-header">
        <h3 class="card-title">Lesson Table - Core</h3>
        

        <div class="card-tools">
        
        

            <div class="input-group mt-0 input-group-sm" style="width: 550px; ">
            
            <a class="btn btn-primary "href="/admin/lessons/create" >
            <i class="fas fa-plus-circle"></i> Create new Lesson
            </a>
   
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search by name, email">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                               
            </div>
           
        </div>
    </div>

    <div class="card">
   
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>THUMBNAIL</th>
                    <th>VIDEO NAME</th>
                    <th>USER NAME</th>
                    <th>CREATED AT</th>
                    <th>ACTION</th>
                   

                </tr>
            </thead>
            <tbody>
                
                @forelse ($lessons as $lesson)
                    <tr>
                        <td>{{ $lesson->id }}</td>
                        <td>{{ $lesson->title }}</td>
                        <td>{{ $lesson->description }}</td>
                        <td>{{ $lesson->thumbnail }}</td>
                        <td>{{ $lesson->video_name }}</td>
                        <td>{{ $lesson->user->name }}</td>
                        <td>{{ $lesson->created_at }}</td>

                        <td>

                       

                            <a href="/admin/lessons/{{$lesson->id}}/edit" class="btn btn-sm btn-warning"><i class="fas fa-pen-alt"> Edit</i></a> 
                           
                            {!!Form::open(['action' => ['App\Http\Controllers\Admin\LessonController@destroy', $lesson->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                               
                                {{Form::submit('Delete', ['class' => 'btn btn-danger '])}}

                                
                            {!!Form::close()!!}

                       
                         <a href="/admin/lessons/{{$lesson->id}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"> View</i></a>
                        
                        </td>
       
                        
                    </tr>
                  
                @empty
                    <tr>No Result Found</tr>
                @endforelse
              
                  
            </tbody>
        </table>
        
       
    </div>



 


    <!-- /.card-body -->
  </div>

                

        </section>
        <!-- /.content -->

        <div class="loading"></div>
    </div>
    <!-- /.content-wrapper -->
@endsection

