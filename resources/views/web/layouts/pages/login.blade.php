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
   <section class="page-title-area bg-img" data-bg-img="template_web/assets/img/photos/bg-page2.jpg">
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

    @endsection