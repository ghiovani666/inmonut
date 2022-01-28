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
                        <h2 class="title"><span>Osteopatía </h2>
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
    <section class="blog-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-details-content">
                        <div class="post-details-body">
                            <div class="thumb">
                                <img class="w-100" src="assets/img/blog/b1.jpg" alt="Image" />
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <a class="category" href="#/"><i
                                            class="fa fa-tags icon"></i><span>FITNESS</span></a>
                                    <a class="post-date" href="#/"><i class="fa fa-calendar icon"></i><span>05 MAY,
                                            2021</span></a>
                                </div>
                                <h4 class="title">PERFECT WORKOUT IS THE WAY TO SHAPE YOUR BODY AND MIND FOR FITNESS
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
                                <p>Gym is very important to maintain our health luptas sit fugit, sed quia cuuntur magni
                                    dolores eos
                                    qui rat ione volupta pleasure rationally encounter consequences that are extremely
                                    pleasure
                                    rationally encounter</p>
                                <div class="row row-gutter-28">
                                    <div class="col-md-6">
                                        <div class="thumb-inner mb-xxs-0">
                                            <img class="w-100" src="assets/img/blog/ds1.jpg" alt="Image" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="thumb-inner">
                                            <img class="w-100" src="assets/img/blog/ds2.jpg" alt="Image" />
                                        </div>
                                    </div>
                                </div>
                                <p>Gym is very important to maintain our health luptas sit fugit, sed quia cuuntur magni
                                    dolores eos
                                    qui rat ione volupta pleasure rationally encounter consequences that are extremely
                                    pleasure
                                    rationally encounter that are extremely painful. Nor again is there anyone who loves
                                    or pursues or
                                    desires to obtain pain of itself, because it is pain, but because occasionally
                                    circumstances occur
                                    in which some great pleasure more than enough to make your body fit with this class,
                                    but you need
                                    to continure your class regularly and timely </p>
                                <div class="blockquote-area">
                                    <blockquote class="blockquote-style bg-img" data-bg-img="assets/img/blog/bg1.jpg">
                                        <p>Gym is very important to maintain our health luptas sit fugit, sed quia
                                            cuuntur magni volupta
                                            pleasure rationally encounter consequences that are extremely pleasure somee
                                            extremely
                                            painful. Nor again is there anyone who loves or pursues or desires</p>
                                        <div class="icon">
                                            <img src="assets/img/icons/right-quote.png" alt="Icon">
                                        </div>
                                    </blockquote>
                                </div>
                                <p>Gym is very important to maintain our health luptas sit fugit, sed quia cuuntur magni
                                    dolores eos
                                    qui rat ione volupta pleasure rationally encounter consequences that are extremely
                                    pleasure
                                    rationally encounter that are extremely painful. Nor again is there anyone who loves
                                    or pursues or
                                    desires to obtain pain of itself, because it is pain, but because occasionally
                                    circumstances occur
                                    in which some great pleasure more than enough to make your body fit with this class,
                                    but you need
                                    to continure your class regularly and timely </p>
                                <p>Gym is very important to maintain our health luptas sit fugit, sed quia cuuntur magni
                                    dolores eos
                                    qui rat ione volupta pleasure rationally encounter consequences that are extremely
                                    pleasure
                                    rationally encounter that are extremely painful. Nor again is there anyone who loves
                                    or pursues or
                                    desires to obtain </p>
                                <div class="widget-social-tags">
                                    <div class="widget-tags">
                                        <span>Tags: </span>
                                        <ul>
                                            <li><a href="classes.html">Fitness</a></li>
                                            <li><a href="classes.html">Workout</a></li>
                                            <li><a href="classes.html">Gym</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-social-icons">
                                        <span>Share: </span>
                                        <a class="facebook" href="#/"><i class="fa fa-facebook"></i></a>
                                        <a class="twitter" href="#/"><i class="fa fa-instagram"></i></a>
                                        <a class="dribbble" href="#/"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                                <div class="page-next-prev">
                                    <div class="nav-item prev">
                                        <i class="fa fa-angle-left"></i>
                                        <a href="blog-details.html">Don’t wish for perfect body you <br>have to work for
                                            it</a>
                                    </div>
                                    <div class="nav-item next">
                                        <a href="blog-details.html">Cardio workout is vary important <br>to make body
                                            fit and
                                            healthier</a>
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                                <div class="comment-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="comment-view-area">
                                                    <h2 class="title">03 Comments</h2>
                                                    <div class="comment-content">
                                                        <div class="single-comment">
                                                            <div class="author-info">
                                                                <div class="thumb">
                                                                    <img src="assets/img/blog/author-01.png"
                                                                        alt="Image">
                                                                </div>
                                                                <div class="author-details">
                                                                    <ul>
                                                                        <li class="name">ZENIFER LUICE</li>
                                                                        <li class="meta-date">05 May - 12.45 pm</li>
                                                                    </ul>
                                                                    <p>Gym is very important to maintain our health quia
                                                                        cuuntur magni dolores eos
                                                                        pleasure mind and make you more healthier to
                                                                        maintain your body and refresh mind
                                                                    </p>
                                                                    <a class="btn-reply" href="#/">REPLY <i
                                                                            class="fa fa-angle-double-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="single-comment">
                                                            <div class="author-info">
                                                                <div class="thumb">
                                                                    <img src="assets/img/blog/author-02.png"
                                                                        alt="Image">
                                                                </div>
                                                                <div class="author-details">
                                                                    <ul>
                                                                        <li class="name">Shane Williamson</li>
                                                                        <li class="meta-date">05 May - 12.58 pm</li>
                                                                    </ul>
                                                                    <p>Gym is very important to maintain our health quia
                                                                        cuuntur magni dolores eos
                                                                        pleasure mind and make you more healthier to
                                                                        maintain your body and refresh mind
                                                                        more than a best quality of fitness gym we prode
                                                                        where no compromise about
                                                                        health</p>
                                                                    <a class="btn-reply" href="#/">REPLY <i
                                                                            class="fa fa-angle-double-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-form-area">
                                                    <h2 class="title">Leave a Comments</h2>
                                                    <div class="comment-form-wrap">
                                                        <div class="clearfix"></div>
                                                        <form action="#" method="post">
                                                            <div class="comment-form-content">
                                                                <div class="row row-gutter-22">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text"
                                                                                placeholder="Name" required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="email"
                                                                                placeholder="Email" required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text"
                                                                                placeholder="Phone" required="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control"
                                                                                name="comment" id="comment" cols="45"
                                                                                rows="7"
                                                                                placeholder="Write message here"
                                                                                required=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group m-0">
                                                                            <button class="btn btn-theme"
                                                                                type="submit">POST COMMENT</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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