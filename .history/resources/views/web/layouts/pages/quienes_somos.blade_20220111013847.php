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
                        <h2 class="title"><span>¿Quiénes Somos? </h2>
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
    <section class="contact-area position-relative">
        <div class="contact-page-wrap">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h2 class="title">¿Quiénes Somos?</span></h2>
                                <div class="desc">
                                    <p>Somos la mejor alternativa para que realices tu entrenamiento en amplios y confortables espacios. Anímate a elegir entre los diversos y estimulantes programas Fitness que tenemos, para que logres todo lo que te propones y por tanto puedas experimentar los beneficios de mantenerte bien a todo nivel.

Estaremos contigo para apoyarte si es que asumes el reto de empezar con un estilo de vida activa y lleno de energía. No somos noveles en esto; tenemos experiencia y sobre todo mucha pasión por el Fitness.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group m-0">
                                            <button class="btn btn-theme" type="button"><a href="viewContacto" style="color: white">CONTACTO</a></button>

                                            
                                        </div>
                                    </div>
                                </div>
            </div>
            <div class="shape-group">
                <div class="shape-img5">
                    <img src="assets/img/photos/shape1.png" alt="Image">
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