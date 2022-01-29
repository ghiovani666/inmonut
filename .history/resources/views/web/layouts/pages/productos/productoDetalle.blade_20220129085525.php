@extends('web.layouts.base')

<!-- Titulo de la página -->
@section('title_page')
<title>Template Prueba</title>
@endsection

<!-- Contenido en el Head de la pagina -->
@section('head_page')
<!-- extras -->
<style>
.zoom {
    display: inline-block;
    position: relative;
}

.zoom img {
    display: block;
}
</style>
@endsection

<!-- Contenido en el Body -->
@section('content')
<!--=== Content Part ===-->

<!--//==Page Header Start==//-->
<div class="page-header black-overlay">
    <div class="container breadcrumb-section">
        <div class="row pad-s15">
            <div class="col-md-12">
                <h2>Detalle del Producto</h2>
                <div class="clear"></div>
                <div class="breadcrumb-box">
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Inicio</a>
                        </li>
                        <li class="active">Detalle del Producto</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//==Page Header End==//-->

<!--//=========product Detail Start=========//-->
<section class="page_single">
    <div class="container">
        <div class="row padTB100">
            <div class="prod-info-section">
                <div class="clearfix">
                    <!--Thumbnail Column-->
                    <div class="carousel-column col-lg-6 col-md-6 col-sm-5 col-xs-12">
                        <div class="wa-product-main-image marB20">
                         
                        </div>
                     
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<!--//==product Review Section Start==//-->
<!--/end container-->
@endsection


@section('footer_page')
<!-- ----------------slider del producto---------- -->
<script type="text/javascript" src="{{ URL::asset('web/assets/plugins/fancymedia/js/jquery.fancybox.pack.js') }}">
</script>
<script type="text/javascript" src="{{ URL::asset('web/assets/plugins/fancymedia/js/jquery.fancybox-media.js') }}">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.20/jquery.zoom.min.js"></script>
<script>
$(document).ready(function() {
    $('#produto').zoom();
});
</script>
@endsection