@extends('../layouts.app')

{{-- @section('third_party_stylesheets')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
@endsection --}}

@section('navbar')
    @include('../components.site.navbar')
@endsection

@section('main-content')
    <div class="bg-light" style="height: 100vh">
        <div class="jumbotron">
            image here...
        </div>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">Laravel</h4>
                          <p class="card-text">Some example text.</p>
                          <a href="#" class="btn btn-info">View Course</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">Node Js</h4>
                          <p class="card-text">Some example text.</p>
                          <a href="#" class="btn btn-info">View Course</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">Ruby</h4>
                          <p class="card-text">Some example text.</p>
                          <a href="#" class="btn btn-info">View Course</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">Python</h4>
                          <p class="card-text">Some example text.</p>
                          <a href="#" class="btn btn-info">View Course</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection