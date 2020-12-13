@extends('../layouts.app')




@section('main-content')
    <div class="bg-light" style="height: 110vh">
        <div class="row">
            <div class="col-md-6  mx-auto">
                <div class="card p-3 mt-4 m-2">


                    <a class="mx-auto" href="/">
                    <img  src="img/logo-top.jpg" style="width: 17rem;" alt="">
                    </a>
                <p class=" text-justify text-sm-left font-weight-normal text-secondary">Thank you for your interest in our program! Our review starts in February 22, 2022. Kindly fill out this form so we will inform you when we open our enrollment. </p>

                        <form method="post" action="/">
                            @csrf

                            <div class="input-group mb-3">
                                <input type="text"
                                    name="name"
                                    class="form-control"
                                    placeholder="Full Name">
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input type="text"
                                    name="school"
                                    class="form-control"
                                    placeholder="School">
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-school"></i></div>
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input type="text"
                                    name="schooladdress"
                                    class="form-control"
                                    placeholder="School Address">
                                <div class="input-group-append">
                                    <div class="input-group-text"><span class="fas fa-search-location"></span></div>
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input type="text"
                                    name="yeargraduated"
                                    class="form-control"
                                    placeholder="Year Graduated">
                                <div class="input-group-append">
                                    <div class="input-group-text"><span class="fas fa-calendar-alt"></span></div>
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input type="text"
                                    name="email"
                                    class="form-control"
                                    placeholder="E-mail Address">
                                <div class="input-group-append">
                                    <div class="input-group-text"><span class="fas fa-envelope-square"></span></div>
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input type="number"
                                    name="mobilenumber"
                                    class="form-control"
                                    placeholder="Mobile Number">
                                <div class="input-group-append">
                                    <div class="input-group-text"><span class="fas fa-mobile"></span></div>
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>



                           


                            <div class="row">
                                
                                <!-- /.col -->
                                <div class="col-8 mx-auto">
                                    <button type="submit" class="btn btn-primary btn-block">Enroll Now!</button>
                                    <a href="/" class="btn btn-danger btn-block">Cancel</a>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
 

                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('../components.site.footer')
@endsection

