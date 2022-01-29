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
<!--=== Content Part ===-->

<style>
/* Layout for this demo */
.wrap {
    position: relative;
    max-width: 1000px;
    width: 90%;
    margin: 100px auto;
}

/* The outer-div to move the elements */
.box-video {
    position: relative;
    width: 100%;
    margin: 0 auto 20px auto;
    cursor: pointer;
    overflow: hidden;
}

/* Set Cover aka Background-Image */
.box-video .bg-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: 2;
}

/* Add light shade to make play button visible*/
.bg-video::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.1);
    z-index: 3;
}


/* The Play-Button using CSS-Only */
.box-video .bt-play {
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -30px 0 0 -30px;
    display: inline-block;
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.1);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 50%;
    text-indent: -999em;
    cursor: pointer;
    z-index: 2;
    -webkit-transition: all .3s ease-out;
    transition: all .3s ease-out;
}

/* The Play-Triangle */
.box-video .bt-play:after {
    content: '';
    position: absolute;
    left: 50%;
    top: 50%;
    height: 0;
    width: 0;
    margin: -12px 0 0 -6px;
    border: solid transparent;
    border-left-color: #000;
    border-width: 12px 20px;
    -webkit-transition: all .3s ease-out;
    transition: all .3s ease-out;
}

.box-video:hover .bt-play {
    transform: scale(1.1);
}

/* When Class added the Cover gets hidden... */
.box-video.open .bg-video {
    visibility: hidden;
    opacity: 0;

    -webkit-transition: all .6s .8s;
    transition: all .6s .8s;
}

/* and iframe shows up */
.box-video.open .video-container {
    opacity: 1;
    -webkit-transition: all .6s .8s;
    transition: all .6s .8s;
}

/* Giving the div ratio of 16:9 with padding */
.video-container {
    position: relative;
    width: 100%;
    height: 0;
    margin: 0;
    z-index: 1;
    padding-bottom: 56.27198%;
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>

<!--//==Page Header Start==//-->
<div class="page-header black-overlay">
    <div class="container breadcrumb-section">
        <div class="row pad-s15">
            <div class="col-md-12">
                <h2>¿Quiénes Somos?</h2>
                <div class="clear"></div>
                <div class="breadcrumb-box">
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Inicio</a>
                        </li>
                        <li class="active">¿Quiénes Somos?</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//==Page Header End==//-->

<section class="page_single">
    <!--//==Contact Form Section Start==//-->
    <div class="container">
        <div class="row contact-bottom padTB100">
            <!--//==Section Heading Start==//-->
            <div class="col-md-12">
                <div class="centered-title">
                    <h1>¿Quiénes Somos? </h1>
                    <div class="clear"></div>
                        <p style="font-family: Lato, Sans-Serif;font-size: 1.89rem;">Desde la creación de Azulejos Rosas en 19xx, el mayor objetivo ha sido la satisfacción plena de
                        nuestros clientes..</p>
                    <div class="clear"></div>
                </div>
            </div>
            <!--//==Section Heading End==//-->
            <!--//==Form Area Start==//-->

            <form id="fashion_contactform" method="post">
                <div class="row">

                    <div class="wrap">

                        <div class="box-video">
                            <div class="bg-video"
                                style="background-image: url(https://unsplash.imgix.net/photo-1425036458755-dc303a604201?fit=crop&fm=jpg&q=75&w=1000);">
                                <div class="bt-play"></div>
                            </div>
                            <div class="video-container">
                                <iframe width="590" height="332"
                                    src="https://www.youtube.com/embed/qIjZqxqDTNM?rel=0&amp;showinfo=0" frameborder="0"
                                    allowfullscreen="allowfullscreen"></iframe>
                            </div>
                        </div>


                    </div>
                </div>
            </form>

            <!--//==Form Area End==//-->
        </div>
    </div>

</section>


<!--/end container-->
@endsection

@section('footer_page')
<script>

</script>
@endsection