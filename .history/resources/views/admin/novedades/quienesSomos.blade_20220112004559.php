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

    <!--== Start Blog Area Wrapper ==-->
    <section class="" style="margin-top: 45px;margin-bottom: 45px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-details-content">
                        <div class="post-details-body">
                            <div class="content">
                                <h2 class="title">{{$rowData_[0]->inferior_titulo}}</h2>
                                <p>{{$rowData_[0]->inferior_descripcion}}</p>

                                <div class="row row-gutter-28">
                                    <div class="col-md-12">
                                        <div class="thumb">
                                            <img class="w-100" src="{{$rowData_[0]->inferior_url_image}}" alt="Image" />
                                        </div>
                                    </div>
                                </div>


                                <h2 class="title">Si te interesa este servicio contacta con nosotros ahora</h2>

                                <div class="row" style="text-align: center;">
                                    <div class="col-md-12">
                                        <div class="form-group m-0">
                                            <button class="btn btn-theme" type="button"><a href="viewContacto"
                                                    style="color: white">CONTACTO</a></button>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Blog Area Wrapper ==-->


</main>

@endsection

@section('footer_page')
<!--//=======Extra=======//-->
</script>

@endsection