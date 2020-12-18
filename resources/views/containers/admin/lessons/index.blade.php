@extends('layouts.app')

@section('navbar')
    @include('../components.admin.navbar')
@endsection

@section('main-sidebar')
    @include('../components.admin.main-sidebar')
@endsection

@section('main-content')

<div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                         @include('inc.messages')

                        <div class="card mt-4">
                            <div class="card-header">
                              <h3 class="card-title text-bold text-info">Lessons Records</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="table1" class="table table-bordered table-hover">
                                <thead class="bg-info">
                                <tr>
                                  <th>No.</th>
                                  <th>Title</th>
                                  <th>Description</th>
                                  <th>Thumbnail</th>
                                  <th>Category</th>
                                  <th>Action</th>
                                  
                                  
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($lessons as $lesson)
                                    <tr>
                                        <td>{{$lesson->id}}</td>
                                        <td>{{$lesson->title}}</td>
                                        <td>{{$lesson->description}}</td>
                                        <td>{{$lesson->thumbnail}}</td>
                                        <td>{{$lesson->category_id}}</td>
                                        
                                        <td class="form-inline">
                                         
                                            {!!Form::open(['action' => ['App\Http\Controllers\Admin\LessonController@destroy', $lesson->id], 'method' => 'POST'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}

                                                <a class="btn btn-info btn-sm" href="/admin/lessons/{{$lesson->id}}/edit">Edit</a>
                                                <a class="btn btn-primary btn-sm" href="/admin/sectionvideo/createvids/{{$lesson->id}}">Add a videos</a>
                                                

                                                <button type="button"class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#myModal{{$lesson->id}}">Delete</button>
                                                
                                                    <div class="modal" id="myModal{{$lesson->id}}">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                    
                                                            <!-- Modal body -->
                                                            <div class="modal-body text-center">
                                                            Are you sure you want to delete this record?
                                                            </div>
                                                    
                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-info btn-sm">Confirm</button>    
                                                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                                            </div>
                                                    
                                                        </div>
                                                        </div>
                                                    </div>

                                              

                                
                                            {!!Form::close()!!}

                                            {{-- <a href="/admin/lessons/{{$lesson->id}}/edit" class="btn btn-info btn-sm mr-2">Edit</a>
                                            {{-- <a href="/admin/lessons/{{$lesson->id}}/edit" class="btn btn-info btn-sm mr-2">Add a Video </a>
                                            <button type="submit" class="btn btn-secondary btn-sm">Delete</button> --}}
                                        </td>


                                    </tr>
                                @endforeach
                                <tfoot class="bg-light">
                                    <tr>
                                      <th>No.</th>
                                      <th>Title</th>
                                      <th>Description</th>
                                      <th>Thumbnail</th>
                                      <th>Category</th>
                                      <th>Action</th>
                                    </tr>
                                </tfoot>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->

    </div>
  
@endsection



