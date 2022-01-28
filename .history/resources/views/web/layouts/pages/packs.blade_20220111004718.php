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
                        <h2 class="title"><span>PACKS </h2>
                        <div class="desc">
                            <p>Nuestros especialistas estan enfocados al 100% al rendimiento físico y mental.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Contact Area ==-->

    <section class="light_section section_padding_75">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header grey">
                        Nuestros servicios de fisioterapia
                    </h2>
                    <p>
                        Descubre la oferta de servicios de fisioterapia que ponemos a tu disposición
                    </p>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4 to_animate animated fadeInUp">
                    <div class="teaser text-center">
                        <div class="teaser_icon main_bg_color size_normal round">
                            <i class="fa fa-medkit"></i>
                        </div>
                        <h3>Osteopatía</h3>
                        <p>Ayudamos a re-equilibrar el organismo centrándonos en la estructura, mejorando de ese modo el
                            funcionamiento del cuerpo.</p>
                        <a href="osteopatia.html" class="theme_button inverse">+ Info</a>
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
                        <a href="miofascial.html" class="theme_button inverse">+ Info</a>
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
                        <a href="puncion.html" class="theme_button inverse">+ Info</a>
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
                        <a href="vendaje.html" class="theme_button inverse">+ Info</a>
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
                        <a href="electrolisis.html" class="theme_button inverse">+ Info</a>
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
                        <a href="adaptacion.html" class="theme_button inverse">+ Info</a>
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

<script type="text/javascript">
$('#sendFormServicios').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    axios.post('enviar_email_informacion',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {
        $('.form-message').html(response.data.data);
        $('form :input').val('');
        $('form :textarea').val('');
    }).catch(function() {
        console.log('FAILURE!!');
    });

});
</script>

@endsection