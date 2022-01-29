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


<!--//==Page Header Start==//-->
<div class="page-header black-overlay">


    <div class="container breadcrumb-section">
        <div class="row pad-s15">
            <div class="col-md-12">
                <h2>{{$rowData_[0]->superior_titulo1}}</h2>
                <div class="clear"></div>
                <div class="breadcrumb-box">
                    <ul class="breadcrumb">
                        <li class="active">{{$rowData_[0]->superior_titulo2}}</li>
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
                    <h1>{{$rowData_[0]->superior_titulo1}} </h1>
                    <div class="clear"></div>
                    <p style="font-family: Lato, Sans-Serif;font-size: 1.89rem;">{{$rowData_[0]->inferior_descripcion}}
                    </p>
                    <div class="clear"></div>
                </div>
            </div>
            <!--//==Section Heading End==//-->
            <!--//==Form Area Start==//-->

            <form id="fashion_contactform" method="post">
                <div class="row">
                    <img class="w-100" src="{{$rowData_[0]->inferior_url_image}}" alt="Image" />
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


@push('scripts')
<script>
$(document).ready(function() {
    $(".page-header").attr("style","background-image:url(<?php $rowData_[0]->url_image ?>) !important");
});
</script>
@endpush