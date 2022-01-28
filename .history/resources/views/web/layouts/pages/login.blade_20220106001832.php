@extends('web.layouts.base')

<!-- Titulo de la página -->
@section('title_page')
<title>Hello Training</title>
@endsection

<!-- Contenido en el Head de la pagina -->
@section('head_page')
<!-- extras -->
@endsection

<!-- Contenido en el Body -->
@section('content')
<main class="main-content">



   <!--== Start Page Title Area ==-->
   <section class="page-title-area bg-img" data-bg-img="assets/img/photos/bg-page2.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-title-content content-style2">
                <h2 class="title"><span>Mi</span> CUENTA</h2>
                <div class="desc">
                  <p class="ml-0">Mantente conectado siempre con nosotros, crea una cuenta o inicia session.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
                      <form class="login-form-wrapper" id="login-form"
                        action="http://whizthemes.com/mail-php/raju/arden/mail.php" method="post">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="UserName" class="form-label">Username or email address *</label>
                                  <input type="email" class="form-control" id="UserName">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group mb-0">
                                  <label for="password" class="form-label mt-15">Password *</label>
                                  <input type="password" class="form-control" id="password">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group mt-15">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1"> Remember me</label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group form-group-info">
                                  <button class="btn btn-theme btn-black" type="button">Log in</button>
                                  <a class="btn-forgot" href="shop-account.html">Lost your password?</a>
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
                      <form class="login-form-wrapper" id="register-form"
                        action="http://whizthemes.com/mail-php/raju/arden/mail.php" method="post">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="RegUserName" class="form-label">Username *</label>
                                  <input type="email" class="form-control" id="RegUserName">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="regemail" class="form-label mt-15">Email address *</label>
                                  <input type="email" class="form-control" id="regemail">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group mb-0">
                                  <label for="regpassword" class="form-label mt-15">Password *</label>
                                  <input type="password" class="form-control" id="regpassword">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group mb-0">
                                  <p>Your personal data will be used to support your experience throughout this website,
                                    to manage access to your account, and for other purposes described in our privacy
                                    policy.</p>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group mb-0 form-group-info">
                                    <button class="btn btn-theme btn-black" type="button">Register</button>
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



    <!--== Start Team Area ==-->
    <section class="team-area team-default-area">
        <div class="container">

            <div class="row" style="margin-top: 50px;">

                <div class="col-sm-5 col-sm-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Login</div>
                        <div class="panel-body ">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password"
                                            required>

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" name="remember"
                                                    {{ old('remember') ? 'checked' : ''}}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>


                </div>

                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>

                <div class="col-sm-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">Register</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name"
                                            value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password"
                                            required>

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm
                                        Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </section>
    <!--== End Team Area ==-->


    </div>
    @endsection

    @section('footer_page')

    @endsection