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
<!--start wrapper-->
<section class="wrapper">


    <!--//=======Main Slider=======//-->
    <div class="wa_main_bn_wrap">
        <div id="home1-main-slider" class="owl-carousel owl-theme">
          
            @if(count($slider_)!=0)
            @foreach($slider_ as $img)
            <div class="item">
                <figure>
                    <img src="{{$img->url_image}}" class="hidden-xs hidden-sm " alt="" />
                    <img src="{{$img->url_image}}" class="hidden-lg hidden-md" alt="" />
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


     <!--//=======Collection Section Start=======//-->
     <section class="collection-section padT100">
        <div class="container">
            <div class="row">
                @if(count($clases_)!=0)
                @foreach($clases_ as $img)
                <div class="{{$img->position}}">
                    <div class="latest-collection-item">
                        <div class="wa-collection">
                            <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                <img src="{{$img->url_image}}" class="hidden-xs" alt="" />
                                <img src="{{$img->url_image}}" class="hidden-sm hidden-lg hidden-md" alt="" />
                                <div class="caption">
                                    <div class="caption-text">
                                        <div class="clear"></div>
                                        <div class="wa-collection-caption">
                                            <h2>{{$img->title1}}</h2>
                                            <div class="clear"></div>
                                            <a href="#" class="theme-button marT10">Ver Detalles</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </section>
    <!--//=======Collection Section End=======//-->

  <!--//=============product Start============//-->
  <div class="wa-products-main padTB100">
        <div class="container">
            <div class="row">
                <!--//==Section Heading Start==//-->
                <div class="col-md-12">
                    <div class="centered-title">
                        <h1 style="text-transform: uppercase;">PRODUCTO ESPECIAL </h1>
                        <div class="clear"></div>
                        <p style="font-family: Lato, Sans-Serif;font-size: 1.89rem;">Estos son nuestros productos especiales que ofrecemos garantia y versatilidad. Somos
                            confianza y durabilidad en el rubro</p>
                    </div>
                </div>
                <!--//==Section Heading End==//-->
            </div>
            <div class="row" id="MixItUp1">
              
                @if(count($fitness_)!=0)
                @foreach($fitness_ as $img)
                <!--//==product Item==//-->
                <div
                    class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                    <div class="wa-products">

                        <div class="wa-products-thumbnail wa-item">
                            <img src="{{$img->url_image}}" alt="">
                            <div class="caption" style="cursor: pointer;" onclick="window.location.href='/somewhere';">
                                <div class="caption-text">
                                    <ul class="wa-products-icon">
                                        <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        </li>
                                        <li><a href="#" class="quickview-box-btn" title="Quick View"><i
                                                    class="fa fa-eye"></i></a></li>
                                        <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>

                        <div class="wa-products-caption">
                            <h2><a href="/">{{$img->title1}}</a></h2>
                            <div class="clear"></div>
                            <div class="clear"></div>

                        </div>
                    </div>
                </div>
                @endforeach
                @endif

                <div class="clear"></div>
            </div>
        </div>
    </div>


</section>

@endsection

@section('footer_page')
<!--//=======Extra=======//-->
@endsection