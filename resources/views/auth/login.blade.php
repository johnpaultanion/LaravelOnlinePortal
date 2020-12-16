@extends('../layouts.app')

@section('sub-title','Categories')



@section('main-content')
    <div class="bg-light" style="height: 100vh">
        <div class="row">
            <div class="col-md-4 mx-auto pt-5">
                <div class="card p-4 mt-3 m-2">
                    <p class="login-box-msg font-weight-bold">Log In to Your Account!</p>
            
                        <form method="post" action="{{ url('/login') }}">
                            @csrf
            
                            <div class="input-group mb-3">
                                <input type="email"
                                       name="email"
                                       value="{{ old('email') }}"
                                       placeholder="Email"
                                       class="form-control @error('email') is-invalid @enderror">
                                <div class="input-group-append">
                                    <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                                </div>
                                @error('email')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
            
                            <div class="input-group mb-3">
                                <input type="password"
                                       name="password"
                                       placeholder="Password"
                                       class="form-control @error('password') is-invalid @enderror">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                @error('password')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
            
                            </div>
                            
                            <div class="row mb-2">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">Remember Me</label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-block font-weight-bold">Sign In</button>
                            <a href="#" class="btn btn-primary btn-block">Facebook</a>

                        </form>

                        <p class="mt-4">Don't have an account? <a href="/register">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('../components.site.footer')
@endsection