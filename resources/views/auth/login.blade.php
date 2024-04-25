@extends('base')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/auth/login.css') }}">   
@endsection

@section('content')
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="{{ route('auth.login') }}" autocomplete="off" class="sign-in-form" method="POST">

                @csrf

              <div class="logo">
                <img src="{{ URL::asset('assets/img/auth/login/logo.png') }}" alt="easyclass" />
                <h4>easyclass</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="email"
                    id="email"
                    name="email"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    value="{{ old('email') }}"
                  />
                  <label for="email">Email</label>
                  @error('email')
                    {{ $message }}
                  @enderror
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    id="password"
                    name="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label for="password">Mot de passe</label>
                  @error('password')
                    {{ $message }}
                  @enderror
                </div>

                <input type="submit" value="Se connecter" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            <form action="index.html" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="{{ URL::asset('assets/img/auth/login/logo.png') }}" alt="easyclass" />
                <h4>easyclass</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign Up" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="{{ URL::asset('assets/img/auth/login/image1.png') }}" class="image img-1 show" alt="" />
              <img src="{{ URL::asset('assets/img/auth/login/image2.png') }}" class="image img-2" alt="" />
              <img src="{{ URL::asset('assets/img/auth/login/image3.png') }}" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Create your own courses</h2>
                  <h2>Customize as you like</h2>
                  <h2>Invite students to your class</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

@section('js')
    <script src="{{ URL::asset('assets/js/auth/login.js') }}"></script>
@endsection
