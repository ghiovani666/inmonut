@extends('web.layouts.base')

<!-- Titulo de la página -->
@section('title_page')
<title>Hello Training</title>
@endsection

<!-- Contenido en el Head de la pagina -->
@section('head_page')
<!-- extras -->


<!--== Bootstrap CSS ==-->
<link href="{{ URL::asset('template_web/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
<!--== Font-awesome Icons CSS ==-->
<link href="{{ URL::asset('template_web/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
<!--== Pe Icon 7 Min Icons CSS ==-->
<link href="{{ URL::asset('template_web/assets/css/pe-icon-7-stroke.min.css') }}" rel="stylesheet" />

<!--== Main Style CSS ==-->
<link href="{{ URL::asset('template_web/assets/css/style.css') }}" rel="stylesheet" />

@endsection

<!-- Contenido en el Body -->
@section('content')
<main class="main-content">

   <!--== Start Page Title Area ==-->

      <!--== End Page Title Area ==-->

      <!--== Start Contact Area ==-->
      <div class="account-login-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 m-auto">
              <div class="login-top">
                <nav class="login-form-nav">
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                      type="button" role="tab" aria-controls="nav-home" aria-selected="true">Login</button>
                    <button class="nav-link nav-register" id="nav-profile-tab" data-bs-toggle="tab"
                      data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                      aria-selected="false">Register</button>
                  </div>
                </nav>
              </div>   
              <div class="login-bottom">
                <div class="login-form-content tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="login-form">
                      <form class="login-form-wrapper" id="login-form" method="POST" action="{{ url('/login') }}">
                      {{ csrf_field() }}
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <label for="email" class="form-label">Email address *</label>
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <label for="password" class="form-label mt-15">Password *</label>
                                  <input type="password" class="form-control" id="password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group mt-15">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember"  {{ old('remember') ? 'checked' : ''}}>
                                  <label class="form-check-label" for="exampleCheck1"> Remember me</label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group form-group-info">
                                  <button class="btn btn-theme btn-black" type="submit">Login</button>
                                  <a class="btn-forgot" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- Message Notification -->
                    <div class="form-message"></div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="login-form">
                      <form class="login-form-wrapper" id="register-form" method="POST" action="{{ url('/register') }}">
                      {{ csrf_field() }}
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                  <label for="RegUserName" class="form-label">Usuario *</label>
                                  <input type="text" class="form-control" id="RegUserName" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <label for="regemail" class="form-label mt-15">Email address *</label>
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                   @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>
                              <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="regpassword" class="form-label mt-15">Password *</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                              </div>
                              <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="regpassword" class="form-label mt-15">Confirm Password *</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                     </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group mb-0">
                                  <p>Sus datos personales se utilizarán para respaldar su experiencia en este sitio web, para administrar el acceso a su cuenta y para otros fines descritos en nuestra política de privacidad.</p>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group mb-0 form-group-info">
                                    <button class="btn btn-theme btn-black" type="submit">Registrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--== End Contact Area ==-->

    </div>
    @endsection

    @section('footer_page')


    <!--=======================Javascript============================-->
  <!--=== Modernizr Min Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/modernizr.js') }}"></script>
  <!--=== jQuery Min Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/jquery-main.js') }}"></script>
  <!--=== jQuery Migration Min Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/jquery-migrate.js') }}"></script>
  <!--=== Popper Min Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/popper.min.js') }}"></script>
  <!--=== Bootstrap Min Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/bootstrap.min.js') }}"></script>
  <!--=== jquery Appear Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/jquery.appear.js') }}"></script>
  <!--=== jquery Swiper Min Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/swiper.min.js') }}"></script>
  <!--=== jquery Fancybox Min Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/fancybox.min.js') }}"></script>
  <!--=== jquery Aos Min Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/aos.min.js') }}"></script>
  <!--=== jquery Slicknav Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/jquery.slicknav.js') }}"></script>
  <!--=== jquery Countdown Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/jquery.countdown.min.js') }}"></script>
  <!--=== jquery Tippy Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/tippy.all.min.js') }}"></script>
  <!--=== Isotope Min Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/isotope.pkgd.min.js') }}"></script>
  <!--=== jquery Vivus Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/vivus.js') }}"></script>
  <!--=== Parallax Min Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/parallax.min.js') }}"></script>
  <!--=== Slick  Min Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/slick.min.js') }}"></script>
  <!--=== jquery Wow Min Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/wow.min.js') }}"></script>
  <!--=== jquery Zoom Min Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/jquery-zoom.min.js') }}"></script>

  <!--=== Custom Js ===-->
  <script src="{{ URL::asset('template_web/assets/js/custom.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


    @endsection