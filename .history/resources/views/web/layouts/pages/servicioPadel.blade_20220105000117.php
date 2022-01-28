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
    <section class="page-title-area bg-img" data-bg-img="{{$rowData_[1]->superior_url_image}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content content-style2">
                        <h2 class="title"><span>{{$rowData_[1]->superior_titulo1}}</span></h2>
                        <div class="desc">
                            <p class="ml-0">{{$rowData_[1]->superior_titulo2}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Slasses Area ==-->
    <section class="divider-area classes-divider-area" style="margin-bottom: 85px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-5">
                    <div class="divider-content">
                        <h2 class="title">{{$rowData_[1]->inferior_titulo}}</h2>
                        <p>{{$rowData_[1]->inferior_descripcion}}</p>
                    </div>
                </div>
                <div class="col-md-6 offset-lg-0 col-xl-6 offset-xl-1">
                    <div class="thumb">
                        <span class="shape-border"></span>
                        <img src="{{$rowData_[1]->inferior_url_image}}" alt="Image">
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
<style>
.divider-area.classes-divider-area {
    padding: 70px 0 0 !important;
}
</style>
@endsection