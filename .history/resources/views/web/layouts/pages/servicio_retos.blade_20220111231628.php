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
                        <h2 class="title"><span>Retos </h2>
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

    <!--== Start Blog Area Wrapper ==-->
    <section class="" style="margin-top: 45px;margin-bottom: 45px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-details-content">
                        <div class="post-details-body">
                            <div class="content">

                                <h4 class="title">Nuestros retos
                                </h4>
                                <p>Gym is very important to maintain our health luptas sit fugit, sed quia cuuntur magni
                                    dolores eos
                                    qui rat ione volupta pleasure rationally encounter consequences that are extremely
                                    pleasure
                                    rationally encounter that are extremely painful. Nor again is there anyone who loves
                                    or pursues or
                                    desires to obtain pain of itself, because it is pain, but because occasionally
                                    circumstances occur
                                    in which some great pleasure s very important to a maintain our health luptas sit
                                    fugit, sed quia
                                    cuuntur magni dolores eos qui ione volupta pleasure rationally encounter
                                    consequences that are
                                    extremely pleasure rationally encounter </p>

                                <div class="row row-gutter-28">
                                    <div class="col-md-12">
                                        <div class="thumb">
                                            <img class="w-100" src="template_web/assets/img/blog/b1.jpg" alt="Image" />
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