@extends('../layouts.app')

@section('sub-title','Categories')




@section('main-content')
    <div class="bg-light" style="height: 100%">
        <div class="row">
            <div class="col-md-6  mx-auto">
            
                <div class="card p-3 mt-4 m-2">


                    <a class="mx-auto" href="/">
                    <img  src="/img/logo-top.jpg" style="width: 17rem;" alt="">
                    </a>

                <p class=" text-justify text-sm-left font-weight-normal text-secondary">Thank you for your interest in our program! Our review starts in February 22, 2022. Kindly fill out this form so we will inform you when we open our enrollment. </p>

               
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Success!</strong> {{ session()->get('success') }}
                                      </div>
                                @endif

                              {!! Form::open(['action' => 'App\Http\Controllers\LandingpageController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                    <div class="input-group mb-3">
                                    <p class="btn-block m-0">Name</p>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter name here">
                                    <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>

                                  <div class="input-group mb-3">
                                    <p class="btn-block m-0">School</p>
                                    <input id="school" type="text" class="form-control" name="school"  required autofocus placeholder="Enter your school here">
                                    <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-school"></span>
                                    </div>
                                    </div>
                                    @error('school')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>

                                  <div class="input-group mb-3">
                                    <p class="btn-block m-0">School Address</p>
                                    <input id="school_address" type="text" class="form-control @error('school_address') is-invalid @enderror" name="school_address" value="{{ old('school_address') }}" required autofocus placeholder="Enter your school address here">
                                    <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-school"></span>
                                    </div>
                                    </div>
                                    @error('school_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>



                                  <div class="input-group mb-3">
                                      <p class="btn-block m-0">Email Address</p>
                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ex.name@email.com">
                                      <div class="input-group-append">
                                      <div class="input-group-text">
                                          <span class="fas fa-envelope"></span>
                                      </div>
                                      </div>
                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>

                                  <div class="input-group mb-3">
                                    <p class="btn-block m-0">Mobile Number</p>
                                    <input id="mobile_number" type="number" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required autofocus placeholder="Enter your mobile number here">
                                    <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                    </div>
                                    @error('mobile_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>

                                  <div class="input-group mb-3">
                                    <p class="btn-block m-0">Year Graduated</p>
                                    <input id="yeargrad" type="date" class="form-control @error('yeargrad') is-invalid @enderror" name="yeargrad" value="{{ old('yeargrad') }}" required autofocus placeholder="Enter your year graduated here">
                                    <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-calendar"></span>
                                    </div>
                                    </div>
                                    @error('yeargrad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>


                                  
                                   
                    

                             <div class="col-11 mx-auto">
                                    {{Form::submit('Submit', ['class'=>'btn btn-primary  btn-block'])}}
                                    <a href="/" class="btn btn-danger btn-block">Cancel</a>
                            </div>

                             
                         {!! Form::close() !!}
 

                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('../components.site.footer')
@endsection

