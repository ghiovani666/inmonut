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
    <section class="page-title-area bg-img" data-bg-img="{{$rowData_[0]->superior_url_image}}">
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

    <!--== Start Slasses Area ==-->
    <section class="divider-area classes-divider-area" style="margin-bottom: 85px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-5">
                    <div class="divider-content">
                        <h2 class="title">{{$rowData_[0]->inferior_titulo}}</h2>
                        <p>{{$rowData_[0]->inferior_descripcion}}</p>
                    </div>
                </div>
                <div class="col-md-6 offset-lg-0 col-xl-6 offset-xl-1">
                    <div class="thumb">
                        <span class="shape-border"></span>
                        <img src="{{$rowData_[0]->inferior_url_image}}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Slasses Area ==-->

        <!--== Start Contact Area ==-->

        <section class="light_section section_padding_75" style="margin-top: 45px;">
        <div class="container">
            <div class="row" style="margin-bottom: 45px;">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header grey">
                        Nuestros servicios de fisioterapia
                    </h2>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4 to_animate animated fadeInUp">
                    <div class="teaser text-center">
                        <div class="teaser_icon main_bg_color size_normal round">
                        <img src="{{$rowData_[0]->inferior_url_image}}" alt="Image">
                        </div>
                        <h3>Osteopatía</h3>
                        <p>Ayudamos a re-equilibrar el organismo centrándonos en la estructura, mejorando de ese modo el
                            funcionamiento del cuerpo.</p>
                        <a href="viewServices1" class="theme_button inverse">+ Info</a>
                    </div>
                </div>

                <div class="col-sm-4 to_animate animated fadeInUp">
                    <div class="teaser text-center">
                        <div class="teaser_icon main_bg_color size_normal round">
                            <i class="fa fa-medkit"></i>
                        </div>
                        <h3>Terapia miofascial</h3>
                        <p>Centramos este tratamiento en la fascia: un tejido denso, fuerte y flexible, que rodea y
                            cubre todos los músculos y huesos.</p>
                        <a href="viewServices2" class="theme_button inverse">+ Info</a>
                    </div>
                </div>

                <div class="col-sm-4 to_animate animated fadeInUp">
                    <div class="teaser text-center">
                        <div class="teaser_icon main_bg_color size_normal round">
                            <i class="fa fa-medkit"></i>
                        </div>
                        <h3>Punción seca</h3>
                        <p>Tratamiento de los puntos gatillo y el dolor miofascial, que consiste en una punción directa
                            del PGM, mediante finas agujas de acupuntura.</p>
                        <a href="viewServices3" class="theme_button inverse">+ Info</a>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-sm-4 to_animate animated fadeInUp">
                    <div class="teaser text-center">
                        <div class="teaser_icon main_bg_color size_normal round">
                            <i class="fa fa-medkit"></i>
                        </div>
                        <h3>Vendaje neuromuscular</h3>
                        <p>El método desarrollado en Japón por el doctor Kenzo Kase, el cual ha supuesto una verdadera
                            revolución en el mundo de la Rehabilitación y de la Medicina deportiva.</p>
                        <a href="viewServices4" class="theme_button inverse">+ Info</a>
                    </div>
                </div>

                <div class="col-sm-4 to_animate animated fadeInUp">
                    <div class="teaser text-center">
                        <div class="teaser_icon main_bg_color size_normal round">
                            <i class="fa fa-medkit"></i>
                        </div>
                        <h3>Electrolisis ecoguiada</h3>
                        <p>Técnica consistente en la aplicación ecoguiada de una corriente galvánica a través de una
                            aguja de acupuntura que produce un proceso inflamatorio de carácter local.</p>
                        <a href="viewServices5" class="theme_button inverse">+ Info</a>
                    </div>
                </div>

                <div class="col-sm-4 to_animate animated fadeInUp">
                    <div class="teaser text-center">
                        <div class="teaser_icon main_bg_color size_normal round">
                            <i class="fa fa-medkit"></i>
                        </div>
                        <h3>Readaptación a las actividades de la vida diaria o deportiva</h3>
                        <p>Fase en la cual perseguimos que el cuerpo coja tono, un equilibrio que sea el que le sustente
                            y afiance toda la estructura.</p>
                        <a href="viewServices6" class="theme_button inverse">+ Info</a>
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
<style>
.divider-area.classes-divider-area {
    padding: 70px 0 0 !important;
}
</style>
@endsection