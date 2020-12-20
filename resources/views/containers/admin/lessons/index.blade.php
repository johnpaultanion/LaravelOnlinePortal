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
                                  <div align="right">
                                    <button type="button" name="create_record" id="create_record" class="btn btn-info">Create Lesson</button>
                                </div>
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


        
                       
                       
                        <form method="post" name="myForm" id="msform" class="modal-content form-horizontal ">
                            @csrf
                            <div class="modal" id="formModal">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light">
                                        <p class="modal-title text-info font-weight-bold">Modal Heading</p>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                        
                                      
                                                <!-- fieldsets -->
                                                <fieldset>
                                                    <h2 class="fs-title">Create a Lesson</h2>
                                                
                                                    <div class="input-group mb-3">
                                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" required autofocus placeholder="Enter title lesson here">
                                                    
                                                        @error('title')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <textarea  id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autofocus placeholder="Enter description lesson here"></textarea>
                                                        
                                                        @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>

                                                <div class="input-group mb-3">
                                                <small>Thumbnail</small>
                                                        {{Form::file('thumbnail')}}

                                                        @error('thumbnail')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                    <small class="input-group">Select a Category</small>
                                                    <div class="input-group mb-3">
                                                        
                                                        <select name="category_id" class="form-control">
                                                    
                                                            <option value="1">test</option>
                                                    
                                                        </select>
                                                    </div>
                                                
                                                
                                                    <input type="button" name="next" class="next action-button" value="Next" />
                                                    <input type="submit" name="action_button" id="action_button" class="action-button" value="Next" />
                                                </fieldset>

                                                <fieldset>
                                                    <h2 class="fs-title">Create a Section</h2>
                                                    
                                                    <div class="input-group mb-3">
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autofocus placeholder="Name of section">
                                                    
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                                                    <input type="submit" name="action_button" id="action_button" class="action-button" value="Submit" />
                                                </fieldset>
                                    </div>
                               </div>
                            </div>
                        
                        </form>
                       
            
        <!-- /.content -->

</div>
  
@endsection


@section('script')
    <script>
        $(document).ready(function(){
            $('.loading').hide()
            $('#create_record').click(function(){
               
                $('#msform')[0].reset();
                $('.form-control').removeClass('is-invalid')
                $('.modal-title').text('Add New Record');
                $('#action_button').val('Save');
                $('#action').val('Add');
                $('#form_result').html('');
                $('#formModal').modal('show');
            });

        })
    </script>

@endsection




