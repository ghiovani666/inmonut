@extends('web.layouts.base')
<!-- Titulo de la página -->
@section('title_page')
<title>Template en Desarrollo</title>
@endsection

<!-- Contenido en el Head de la pagina -->
@section('head_page')
<!-- extras -->
@endsection

<!-- Contenido en el Body -->
@section('content')

<main class="main-content">
    <?php  
        $footer_ = DB::table('home_footer')->where('id_footer', '=',1)->get();
    ?>

    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="assets/img/photos/bg-page2.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content content-style2">
              <h2 class="title"><span>OUR </span>CLASSES</h2>
              <div class="desc">
                <p class="ml-0">We provide special  classes very important to maintain our health luptas sit fugit, <br>for your fitness sed quia cuuntur magni dolores eos qui rat ione volupta</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Slasses Area ==-->
    <section class="divider-area classes-divider-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xl-5">
            <div class="divider-content">
              <div class="subtitle">OUR CLASSES</div>
              <h2 class="title">SPECIFIC <span>CLASSES <br>WHAT </span>YOU NEEDS</h2>
              <p>Gym is very important to maintain our health luptas sit fugit, sed quia cuuntur magni dolores eos qui rat ione volupta pleasure rationally encounter consequences that are extremely</p>
              <p>Gym is very important to maintain our health luptas sit fugit, sed quia cuuntur magni dolores eos qui rat ione volupta</p>
              <div class="btn-play-box">
                <a class="btn-play play-video-popup" href="https://www.youtube.com/watch?v=MLpWrANjFbI"><img src="assets/img/icons/play-btn1.png" alt="Image">VIDEO CLASS</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 offset-lg-0 col-xl-6 offset-xl-1">
            <div class="thumb">
              <span class="shape-border"></span>
              <img src="assets/img/photos/d1.png" alt="Image">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Slasses Area ==-->


</main>

@endsection

@section('footer_page')
<!--//=======Extra=======//-->
@endsection