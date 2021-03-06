@extends('web.layouts.base')
<!-- Titulo de la página -->
@section('title_page')
<title>Inmonut</title>
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
                        <h2 class="title"><span>CONTACTO </h2>
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
                                <h2 class="title">PONTE EN <span>CONTACTO</span></h2>
                                <div class="desc">
                                    <p>Contáctenos si necesita información</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="contact-info-content">
                            <div class="contact-info-item">
                                <div class="icon">
                                    <img class="icon-img" src="/template_web/assets/img/icons/c1.png" alt="Icon">
                                </div>
                                <div class="content">
                                    <p>{{ $footer_[0]->direccion }}</p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="icon">
                                    <img class="icon-img" src="/template_web/assets/img/icons/c2.png" alt="Icon">
                                </div>
                                <div class="content">
                                    <a href="#">{{ $footer_[0]->telefono }}</a>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="icon">
                                    <img class="icon-img" src="/template_web/assets/img/icons/c3.png" alt="Icon">
                                </div>
                                <div class="content">
                                    <a href="#">{{ $footer_[0]->web }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form mb-md-90">


                            <form class="contact-form-wrapper" id="sendFormServicios">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title">
                                            <h2 class="title">Enviar mensaje</h2>
                                            <div class="desc">
                                                <p>Si necesita información, no dude en enviarme un mensaje. Intentaré
                                                    responderle y brindarle los consejos adecuados sobre su mensaje.</p>
                                            </div>
                                        </div>
                                        <div class="section-title">
                                            <!-- Message Notification -->
                                            <div class="form-message"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row row-gutter-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="txt_nombre"
                                                        id="txt_nombre" placeholder="Nombre">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="txt_email"
                                                        id="txt_email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="txt_telefono"
                                                        id="txt_telefono" placeholder="Teléfono">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="txt_asunto"
                                                        id="txt_asunto" placeholder="Asunto">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group mb-0">
                                                    <textarea name="txt_descripcion" id="txt_descripcion"
                                                        placeholder="Escribe un mensaje"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="text-align: center;">
                                                <div class="form-group mb-0">
                                                    <button class="btn btn-theme" type="submit">ENVIAR MENSAJE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="contact-map-area">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8402891185374!2d144.95373631590425!3d-37.81720974201477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2ssg!4v1607294780661!5m2!1sen!2ssg"></iframe>
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