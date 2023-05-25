@extends('layouts.user_type.guest')

@section('content')

<main class="main-content mt-0" >
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                          <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                            <p class="mb-0">Create a new acount<br></p>
                            <p class="mb-0">OR Sign in with these credentials:</p>
                            <p class="mb-0">Email <b>IsaacAdmin@gmail.com</b></p>
                            <p class="mb-0">Password <b>123456</b></p>
                          </div>
                          <div class="card-body">
                            <form role="form" method="POST" action="{{ route('login') }}">
                              @csrf
                              <label>Email</label>
                              <div class="mb-3">
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                  <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                              </div>
                              <label>Password</label>
                              <div class="mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon"required autocomplete="current-password">
                                @error('password')
                                  <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} checked="">
                                <label class="form-check-label" for="remember">Remember me</label>
                              </div>
                              <div class="text-center">
                                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Login</button>
                              </div>
                            </form>
                          </div>
                          <div class="card-footer text-center pt-0 px-lg-2 px-1">
                          <small class="text-muted">Forgot you password? Reset you password 
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-info text-gradient font-weight-bold">here</a>  
                            @endif
                          </small>
                            <p class="mb-4 text-sm mx-auto">
                              Don't have an account?
                              <a href="register" class="text-info text-gradient font-weight-bold">Sign up</a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                          <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/fondo14.jpg')"></div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
