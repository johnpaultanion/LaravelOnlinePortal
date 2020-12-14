@extends('../layouts.app')




@section('main-content')
    <div class="bg-light" style="height: 110vh">
        <div class="row">
            <div class="col-md-6  mx-auto">
            @include('inc.messages')
                <div class="card p-3 mt-4 m-2">


                    <a class="mx-auto" href="/">
                    <img  src="img/logo-top.jpg" style="width: 17rem;" alt="">
                    </a>
                <p class=" text-justify text-sm-left font-weight-normal text-secondary">Thank you for your interest in our program! Our review starts in February 22, 2022. Kindly fill out this form so we will inform you when we open our enrollment. </p>

                        {!! Form::open(['action' => 'App\Http\Controllers\LandingpageController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="input-group mb-3">
                                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Full Name'])}}
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                             </div>

                             <div class="input-group mb-3">
                                {{Form::text('school', '', ['class' => 'form-control', 'placeholder' => 'School'])}}
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-school"></i></div>
                                </div>
                             </div>

                             <div class="input-group mb-3">
                                {{Form::text('schooladdress', '', ['class' => 'form-control', 'placeholder' => 'School Address'])}}
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-search-location"></i></div>
                                </div>
                             </div>


                             <div class="input-group mb-3">
                                {{Form::text('yeargraduated', '', ['class' => 'form-control', 'placeholder' => 'Year Graduated'])}}
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                </div>
                             </div>

                             <div class="input-group mb-3">
                                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'E-mail Address'])}}
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                             </div>

                             <div class="input-group mb-3">
                                {{Form::number('mobilenumber', '', ['class' => 'form-control', 'placeholder' => 'Mobile Number'])}}
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-mobile"></i></div>
                                </div>
                             </div>

                    

                             <div class="col-8 mx-auto">
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

