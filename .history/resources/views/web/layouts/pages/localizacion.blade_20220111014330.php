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
                        <h2 class="title"><span>Localización </h2>
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
                                <h2 class="title">Nuestra Localización</span></h2>
                                <div class="desc">
                                    <p>Si necesitas información de nuestros programas, servicios o cualquier otra
                                        consulta, por favor sírvete escribirnos y en breve nos contactaremos contigo.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="contact-map-area">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8402891185374!2d144.95373631590425!3d-37.81720974201477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2ssg!4v1607294780661!5m2!1sen!2ssg"></iframe>
                        </div>
                    </div>
                </div>



            </div>

            <div class="row">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <button class="btn btn-theme" type="button"><a href="viewContacto"
                                    style="color: white">CONTACTO</a></button>
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