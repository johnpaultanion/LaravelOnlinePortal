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
            <div class="container-fluid">
                <div class="row">
                
                    <div class="col-6 offset-3 mt-4">
                        
                        <div class="card">
                            <div class="card-body login-card-body">
              
                              <p class="login-box-msg text-info"><b>Add new Category</b></p>
                              {{-- <p class="login-box-msg">Enter your credentials to continue</p> --}}
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Success!</strong> {{ session()->get('success') }}
                                      </div>
                                @endif
                              <form method="POST" action="{{ route('category-store') }}">
                                  @csrf
                                  <div class="input-group mb-3">
                                    <p class="btn-block m-0">Name</p>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter name here">
                                    <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-tag"></span>
                                    </div>
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                <button type="submit" class="btn btn-info btn-block btn-sm my-4">Save</button>
              
                              </form>
                            </div>
                            <!-- /.login-card-body -->
                            <div class="card-footer"></div>
                          </div>
                         
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
@endsection


