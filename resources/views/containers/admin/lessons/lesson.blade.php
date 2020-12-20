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
                    <div class="col-12">
                        <div class="card mt-4">
                            <div class="card-header">
                              <h3 class="card-title text-bold text-info">Lessons Records</h3>
                                <div align="right">
                                    <button type="button" name="create_record" id="create_record" class="btn btn-info">Create Record</button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                              <table id="table" class="table table-bordered table-hover">
                                <thead class="bg-light">
                                    <tr>
                                      
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created By</th>
                                        
                                        <th width=160>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tfoot class="bg-light">
                                    <tr>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created By</th>

                                        <th width=160>Action</th>
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

        <div class="loading"></div>

        <!-- The Modal -->
        <form method="post" id="myForm" class="form-horizontal ">
            @csrf
            <div class="modal" id="formModal">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                
                        <!-- Modal Header -->
                        <div class="modal-header bg-light">
                            <p class="modal-title text-info font-weight-bold">Modal Heading</p>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                
                        <!-- Modal body -->
                        <div class="modal-body">
                            <span id="form_result"></span>
                            
                            <div class="row">
                              
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4" >Category : </label>
                                        <select name="category_id" id="category_id" class="form-control select2">
                                            <option value="" disabled selected>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="invalid-feedback" role="alert">
                                            <strong id="error-category_id"></strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4" >Thumbnail : </label>
                                        <input type="file" name="thumbnail" id="thumbnail" class="form-control" />
                                        <span class="invalid-feedback" role="alert">
                                            <strong id="error-thumbnail"></strong>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4" >Title : </label>
                                        <input type="text" name="title" id="title" class="form-control" />
                                        <span class="invalid-feedback" role="alert">
                                            <strong id="error-title"></strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4" >Description : </label>
                                        <textarea name="description" id="description" class="form-control" ></textarea>
                                        <span class="invalid-feedback" role="alert">
                                            <strong id="error-description"></strong>
                                        </span>
                                    </div>
                                </div>
                               
                            </div>

                            <div class="row">
                             
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <h3 class="card-title text-bold text-info">Create a Section :</h3><br>
                                        <label class="control-label col-md-4" >Section Name : </label>
                                        <input type="text" name="sectionname" id="sectionname" class="form-control" />
                                        <span class="invalid-feedback" role="alert">
                                            <strong id="error-sectionname"></strong>
                                        </span>
                                    </div>
                                </div>

                            
                               
                            </div>

                         
                            
                          

                            <input type="hidden" name="action" id="action" value="Add" />
                            <input type="hidden" name="hidden_id" id="hidden_id" />
                        </div>
                
                        <!-- Modal footer -->
                        <div class="modal-footer bg-light">
                            <input type="submit" name="action_button" id="action_button" class="btn btn-info" value="Save" />
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                
                    </div>
                </div>
            </div>
        </form>


        <form method="post" id="myForm" class="form-horizontal ">
            @csrf
            <div class="modal" id="formModalSection">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                
                        <!-- Modal Header -->
                        <div class="modal-header bg-light">
                            <p class="modal-title text-info font-weight-bold">Modal Heading</p>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                
                        <!-- Modal body -->
                        <div class="modal-body">
                            <span id="form_result"></span>
                            
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label col-md-4" >Name : </label>
                                        <input type="text" name="name" id="name" class="form-control" />
                                        <span class="invalid-feedback" role="alert">
                                            <strong id="error-name"></strong>
                                        </span>
                                    </div>
                                </div>
                               
                            </div>

                         
                            
                          

                            <input type="hidden" name="action" id="action" value="Add" />
                            <input type="hidden" name="hidden_id" id="hidden_id" />
                        </div>
                
                        <!-- Modal footer -->
                        <div class="modal-footer bg-light">
                            <input type="submit" name="action_button" id="action_button" class="btn btn-info" value="Save" />
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                
                    </div>
                </div>
            </div>
        </form>

  

    </div>
    <!-- /.content-wrapper -->
@endsection

@section('footer')
    @include('./components.admin.footer')
@endsection


@section('script')
    <script>
        $(document).ready(function(){
            $('.loading').hide()

            $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('lesson.index') }}",
                    beforeSend: function() { $('.loading').show() },
                    complete: function() { $('.loading').hide() },
                },
                columns: [
                    
                    {
                        data: 'category',
                        name: 'category'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'user_id',
                        name: 'user_id'
                    },
                    
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]
            });

            $('#create_record').click(function(){
                $('#myForm')[0].reset();
               
                $('#category_id').select2({
                    theme:'bootstrap4',
                    placeholder: 'Select category'
                })
                $('.form-control').removeClass('is-invalid')
                $('.modal-title').text('Add New Record');
                $('#action_button').val('Save');
                $('#action').val('Add');
                $('#form_result').html('');
                $('#formModal').modal('show');
            });


            $('#myForm').on('submit', function(event){
                event.preventDefault();
                $('.form-control').removeClass('is-invalid')
                var action_url = "{{ route('lesson.store') }}";
                var type = "POST";

                if($('#action').val() == 'Edit'){
                    var id = $('#hidden_id').val();
                    action_url = "lesson/" + id;
                    type = "PUT";
                }

                $.ajax({
                    url: action_url,
                    method:type,
                    data:$(this).serialize(),
                    dataType:"json",
                    success:function(data){
                        var html = '';
                        if(data.errors){
                            $.each(data.errors, function(key,value){
                                if(key == $('#'+key).attr('id')){
                                    $('#'+key).addClass('is-invalid')
                                    $('#error-'+key).text(value)
                                }
                            })
                        }
                        if(data.success){
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('.form-control').removeClass('is-invalid')
                            $('#myForm')[0].reset();
                            $('#category_id').select2({
                                theme:'bootstrap4',
                                placeholder: 'Select category'
                            })
                            $('#table').DataTable().ajax.reload();
                            $('#formModalSection').modal('show');
                            $('#formModal').modal('hide');
                            $('.form-control').removeClass('is-invalid')
                            $('.modal-title').text('Add New Section');
                            $('#action_button').val('Save');
                            $('#action').val('Add');
                            $('#form_result').html('');
                        }
                        $('#form_result').html(html);
                    }
                });
            });


        })
    </script>
@endsection
