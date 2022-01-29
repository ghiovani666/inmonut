@extends('web.layouts.base')

<!-- Titulo de la página -->
@section('title_page')
<title>Template Prueba</title>
@endsection

<!-- Contenido en el Head de la pagina -->
@section('head_page')
<!-- extras -->

@endsection

<!-- Contenido en el Body -->
@section('content')
<!--=== Content Part ===-->
<?php  
        $footer_ = DB::table('web_footer')->where('id_footer', '=',1)->get();
    ?>
<!--//==Page Header Start==//-->

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

<!--//==Page Header End==//-->

<section class="page_single">
    <!--//==Contact Form Section Start==//-->
    <div class="container">
        <div class="row contact-bottom padTB100">
            <!--//==Section Heading Start==//-->
            <div class="col-md-12">
                <div class="centered-title">
                    <h1>Ponerse en Contacto </h1>
                    <div class="clear"></div>
                    <p style="font-family: Lato, Sans-Serif;font-size: 1.89rem;">Consulta: Para mayores informes estamos
                        gustosos de ayudarte en los siguientes correos electrónicos:</p>
                    <div class="clear"></div>
                </div>
            </div>
            <!--//==Section Heading End==//-->
            <!--//==Form Area Start==//-->
            <div class="col-md-12 left-box">

                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                </div>
                @endif

                <form id="fashion_contactform" action="{{url('/enviar_email_informacion')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nombre<span class="required red-text">*</span></label>
                                <input type="text" name="txt_nombre" id="txt_nombre">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email<span class="required red-text">*</span></label>
                                <input type="email" name="txt_email" id="txt_email">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Número de Telf.</label>
                                <input type="text" name="txt_telefono" id="txt_telefono">
                            </div>
                        </div>

                        <div class="clear"></div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Escribe el Mensaje<span class="required red-text">*</span></label>
                                <textarea name="txt_descripcion" id="txt_descripcion" class="textarea-message"
                                    rows="10"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 form-group">
                            <input type="submit" class="theme-button" value="Enviar Mensaje">
                            <div class="fashion_infotext"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!--//==Form Area End==//-->
        </div>
    </div>
    <!--//==Contact Form Section End==//-->
    <!--//==Contact Map Section Start==//-->
    <div class="col-md-12 col-sm-12">
        <div class="row">
            <div class="map-area">
                <iframe src="{{ $footer_[0]->web }}" width="600" height="450" style="border:0;" allowfullscreen=""
                    loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <!--//==Contact Map Section End==//-->
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
    $(".page-header").attr("style",
        "background-image:url(<?php echo $rowData_[0]->superior_url_image; ?>) !important");
});
</script>
@endpush