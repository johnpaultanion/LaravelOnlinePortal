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
                        <div class="card mt-4 px-2">
                            <h1>Admin Dashboard</h1>
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