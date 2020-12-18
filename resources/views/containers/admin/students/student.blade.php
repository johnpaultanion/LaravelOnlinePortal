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
                              <h3 class="card-title text-bold text-info">Enrolled Students Records</h3>
                                <div align="right">
                                    <div class="dropdown show">
                                        <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Paid Status
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item setStatus" status="Confirmed" href="#">Yes</a>
                                            <a class="dropdown-item setStatus" status="Rejected" href="/admin/students/studentnotpaid">No</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                              <table id="table" class="table table-bordered table-hover">
                                <thead class="bg-light">
                                    <tr>
                                        <th width=50>No.</th>
                                        <th>Name</th>
                                        <th>School</th>
                                        <th>School Address</th>
                                        <th>Year Graduated</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>IsPaid</th>
                                        
                                        <th width=160>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tfoot class="bg-light">
                                    <tr>
                                        <th width=50>No.</th>
                                        <th>Name</th>
                                        <th>School</th>
                                        <th>School Address</th>
                                        <th>Year Graduated</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>IsPaid</th>
                                        
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
      

    </div>
    <!-- /.content-wrapper -->
@endsection


@section('script')
    <script>
        $(document).ready(function(){
            $('.loading').hide()
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('student.index') }}",
                    beforeSend: function() { $('.loading').show() },
                    complete: function() { $('.loading').hide() },
                },
                columns: [
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'school',
                        name: 'school'
                    },
                    {
                        data: 'school_address',
                        name: 'school_address'
                    },
                    {
                        data: 'yeargrad',
                        name: 'yeargrad'
                    },
                    {
                        data: 'mobile_number',
                        name: 'mobile_number'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'is_paid',
                        name: 'is_paid'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]
            });

           
           

        })
    </script>
@endsection


