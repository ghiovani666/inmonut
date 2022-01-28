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
        $footer_ = DB::table('web_footer')->where('id_footer', '=',1)->get();
    ?>

    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="/template_web/assets/img/photos/bg-page2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content content-style2">
                    <h2 class="title"><span>{{$rowData_[0]->superior_titulo1}}</span></h2>
                        <div class="desc">
                            <p class="ml-0">{{$rowData_[0]->superior_titulo2}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Contact Area ==-->
    <section class="contact-area position-relative">
        <div class="contact-page-wrap">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                            <h2 class="title" style="text-align: center;">{{$rowData_[0]->inferior_titulo}}</h2>
                                <div class="desc">
                                <p>{{$rowData_[0]->inferior_descripcion}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="contact-map-area">
                            <iframe
                                src="{{$rowData_[0]->inferior_url_image}}"></iframe>
                        </div>
                    </div>
                </div>


                <div class="row" style="text-align: center; margin-top:45px">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <button class="btn btn-theme" type="button"><a href="viewContacto"
                                    style="color: white">CONTACTO</a></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--== End Contact Area ==-->


</main>

@endsection

@section('footer_page')
<!--//=======Extra=======//-->

@endsection