@extends('web.layouts.base')
<!-- Titulo de la página -->
@section('title_page')
<title>Template en Desarrollo</title>
@endsection

<!-- Contenido en el Head de la pagina -->
@section('head_page')
<!-- extras -->
<style>
    h1, h2, h3, h4, h5, h6 {
        font-family: "Libre Baskerville", serif;
    /* font-weight: 700; */
    line-height: 1.2;
    margin: 0 0 10px;    
    color: #292a2d;
    font-size: 4rem;
}
</style>
@endsection

<!-- Contenido en el Body -->
@section('content')
section class="wrapper">


    <!--//=======Main Slider=======//-->
    <div class="wa_main_bn_wrap">
        <div id="home1-main-slider" class="owl-carousel owl-theme">

          
            @if(count($slider_)!=0)
            @foreach($slider_ as $img)
            <div class="item">
                <figure>
                    <img src="{{$img->url_image}}" class="hidden-xs hidden-sm " alt="" />
                    <img src="{{$img->url_image}}" class="hidden-lg hidden-md" alt="" />
                    <figcaption>
                        <div class="container">
                            <h2><span>{{$img->title1}}</span></h2>
                            <span>{{$img->title2}}</span>
                            <p>{{$img->title2}}</p>
                        </div>
                    </figcaption>
                </figure>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    <!--//=======Main Slider End=======//-->
    <!-- <div class="col-md-12" style="margin-top: 80px;"> -->
    <div class="col-md-12">
        <div class="centered-title" style="margin-top: 45px;">
            <h1 style="text-transform: uppercase;">Bienvenidos 
            <!-- <span class="heading-border"></span> -->
            </h1>
            <div class="clear"></div>
            <p style="font-family: Lato, Sans-Serif;font-size: 1.89rem;">Azulejos Rosa, somos una empresa líder en la venta de azulejos en Madrid,
                con más de 35 años en el sector, visita nuestra nueva exposición de azulejos y productos
                con más de 600 Modelos.</p>
        </div>
    </div>


    
</section>

@endsection

@section('footer_page')
<!--//=======Extra=======//-->
@endsection