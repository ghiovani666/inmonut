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
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area slider-default">
        <div class="home-slider-content">
            <div class="swiper-container home-slider-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- Start Slide Item -->
                        <div class="home-slider-item">
                            <div class="bg-thumb bg-img" data-bg-img="/template_web/assets/img/slider/1.jpg"></div>
                            <div class="slider-content-area">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-sm-8 offset-sm-2 col-lg-5 offset-lg-0">
                                            <div class="content">
                                                <div class="inner-content">
                                                    <div class="icon">
                                                        <img src="/template_web/assets/img/icons/g1.png" alt="Image">
                                                    </div>
                                                    <h2>{{$slider_[0]->title1}}</h2>
                                                    <p>{{$slider_[0]->title2}}</p>
                                                    <a href="#" class="btn-theme">Contactar Ahora</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-7">
                                            <div class="slider-thumb">
                                                <img src="{{$slider_[0]->url_image}}" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Slide Item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Features Area Wrapper ==-->
    <section class="features-area features-default-area">
        <div class="container-fluid p-0">
            <div class="row row-gutter-0">
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Featured Item -->
                    <div class="featured-item">
                        <div class="featured-thumb">
                            <img src="{{$slider_[1]->url_image}}" alt="Image">
                        </div>
                        <div class="featured-info">
                            <a href="{{$slider_[1]->url_link}}">
                                <h4>{{$slider_[1]->title1}}</h4>
                            </a>
                        </div>
                    </div>
                    <!-- End Featured Item -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Featured Item -->
                    <div class="featured-item">
                        <div class="featured-thumb">
                            <img src="{{$slider_[2]->url_image}}" alt="Image">
                        </div>
                        <div class="featured-info">
                            <a href="{{$slider_[2]->url_link}}">
                                <h4>{{$slider_[2]->title1}}</h4>
                            </a>

                        </div>
                    </div>
                    <!-- End Featured Item -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Featured Item -->
                    <div class="featured-item">
                        <div class="featured-thumb">
                            <img src="{{$slider_[3]->url_image}}" alt="Image">
                        </div>
                        <div class="featured-info">
                            <a href="{{$slider_[3]->url_link}}">
                                <h4>{{$slider_[3]->title1}}</h4>
                            </a>

                        </div>
                    </div>
                    <!-- End Featured Item -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Featured Item -->
                    <div class="featured-item">
                        <div class="featured-thumb">
                            <img src="{{$slider_[4]->url_image}}" alt="Image">
                        </div>
                        <div class="featured-info">
                            <a href="{{$slider_[4]->url_link}}">
                                <h4>{{$slider_[4]->title1}}</h4>
                            </a>

                        </div>
                    </div>
                    <!-- End Featured Item -->
                </div>
            </div>
        </div>
    </section>
    <!--== End Features Area Wrapper ==-->



    <!--== Start About Area ==-->
    <section class="about-area about-default-area position-relative">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-aos="fade-up" data-aos-Duración="1000">
                        <h2 class="title"><span>Bienvenidos </span>a Hello Training</h2>
                        <div class="desc">
                            <p>“Fitness” o “Wellness”, son términos que utilizamos popularmente para referirnos al
                                equilibrio entre el bienestar físico y mental, a un estilo de vida saludable y
                                beneficioso
                                para nuestro cuerpo y para nuestras capacidades, que nos permite llevar a cabo
                                cualquier actividad, tanto deportiva como cotidiana.
                                El ejercicio físico, la importancia de cuidar de nuestro cuerpo tanto a nivel estético
                                como de salud y las sensaciones positivas que nos proporciona el deporte, han hecho
                                que el fitness sea siempre algo vigente en nuestra sociedad, ganando mayor alcance y
                                valor con los años en proporción a la facilidad con la que hoy en día se obtiene
                                información acerca del ejercicio y las dietas, de qué es beneficioso y qué dañino para
                                nuestro organismo y de la importancia de verse y sentirse bien.
                                Si algo está claro es que nuestro cuerpo ha de ser nuestro templo, dado que nos
                                acompañará y refugiará durante toda nuestra existencia, y por ello hemos de cuidarlo
                                y darle el mejor trato posible para que esto sea recíproco. ¡Dale a tu cuerpo la
                                energía,
                                la vigorosidad, el movimiento y el esmero que éste merece, y los resultados que
                                obtendrás serán útiles para cualquier ámbito de tu vida!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 col-xl-7 order-1 order-lg-0">
                    <div class="thumb" data-aos="fade-left" data-aos-Duración="1000">
                        <img src="/template_web/assets/img/about/1.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-5 col-xl-5 order-0 order-lg-1">
                    <div class="about-content">
                        <div class="section-title stitle-style2">
                            <div class="subtitle">CIENCIA 2022</div>
                            <h2 class="title">MEJORES <span>EQUIPOS <br>& ENTRENADORES </span>FITNESS</h2>
                            <div class="desc">
                                <p>El gimnasio es muy importante para mantener nuestra salud. </p>
                            </div>
                        </div>
                        <div class="inner-content">
                            <div class="about-list">
                                <ul>
                                    <li>Desarrolla la potencia aeróbica</li>
                                    <li>Estructura corporal fuerte</li>
                                    <li>Arranca tu memoria</li>
                                    <li>Brng sobre un sueño fructífero</li>
                                </ul>
                            </div>
                            <div class="inline-style">
                                <a class="btn btn-theme" href="#">Empecemos</a>
                                <div class="btn-play-box">
                                    <a class="btn-play play-video-popup"
                                        href="https://www.youtube.com/watch?v=MLpWrANjFbI"><img
                                            src="/template_web/assets/img/icons/play-btn1.png" alt="Image">VÍDEO DE
                                        INTRODUCCIÓN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="shape-group">
            <div class="shape-img1">
                <img src="/template_web/assets/img/photos/shape1.png" alt="Image">
            </div>
        </div>
    </section>
    <!--== End About Area ==-->

    <!--== Start Features Area Wrapper ==-->
    <section class="features-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-columns-wrap">
                        <div class="featured-items-style2 bg-img"
                            data-bg-img="/template_web/assets/img/photos/bg-f2.jpg">
                            <div class="row row-gutter-0">
                                <div class="col-md-6">
                                    <!-- Start Featured Item -->
                                    <div class="featured-item">
                                        <div class="featured-icon">
                                            <img src="/template_web/assets/img/icons/f1.png" alt="Image">
                                        </div>
                                        <div class="featured-info">
                                            <h4>Mejor entrenamiento</h4>
                                            <p>Mejor entrenamiento dolor sit consectetur adipiscing elit, sed do eiusmod
                                                temp incididunt
                                                ut labore et dolore</p>
                                        </div>
                                    </div>
                                    <!-- End Featured Item -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Start Featured Item -->
                                    <div class="featured-item">
                                        <div class="featured-icon">
                                            <img src="/template_web/assets/img/icons/f2.png" alt="Image">
                                        </div>
                                        <div class="featured-info">
                                            <h4>Entrenador calificado</h4>
                                            <p>Entrenador calificado consectetur adipg elit, sed do eiusmod tempor
                                                incididu ut labore
                                                dolore are same magna</p>
                                        </div>
                                    </div>
                                    <!-- End Featured Item -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Start Featured Item -->
                                    <div class="featured-item">
                                        <div class="featured-icon">
                                            <img src="/template_web/assets/img/icons/f3.png" alt="Image">
                                        </div>
                                        <div class="featured-info">
                                            <h4>Último equipo</h4>
                                            <p class="m-0">Último equipo dolor consectetur adipiscing elit, sed do
                                                eiusmod tempor
                                                incididunt ut labore et dolore magna </p>
                                        </div>
                                    </div>
                                    <!-- End Featured Item -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Start Featured Item -->
                                    <div class="featured-item">
                                        <div class="featured-icon">
                                            <img src="/template_web/assets/img/icons/f4.png" alt="Image">
                                        </div>
                                        <div class="featured-info">
                                            <h4>Ganadores del premio</h4>
                                            <p class="m-0">Ganador del premio dolor sit consectetur adipiscing elit, sed
                                                do eiusmod tempor
                                                incididunt ut labore et dolore magna </p>
                                        </div>
                                    </div>
                                    <!-- End Featured Item -->
                                </div>
                            </div>
                        </div>
                        <div class="featured-discount-item">
                            <div class="thumb" data-bg-img="/template_web/assets/img/photos/f1.jpg"></div>
                            <div class="content">
                                <h2>35%</h2>
                                <h3>Descuento</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Features Area Wrapper ==-->

    <!--== Start Service Area ==-->
    <section class="service-area service-default-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-aos="fade-up" data-aos-Duración="1000">
                        <h2 class="title"><span>CLASES </span>QUE OFRECEMOS</h2>
                        <div class="desc">
                            <p>{{ $clases_[0]->descripcion }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-Duración="1100">
                <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <div class="inner-content">
                                    <div class="thumb">
                                        <a href="#"><span><img src="{{ $clases_[0]->url_image }}"
                                                    alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="#">{{ $clases_[0]->title1 }}</a></h4>

                                        <a href="{{$clases_[0]->url_link}}">
                                            <h4 class="class-time">{{ $clases_[0]->title2 }}</h4>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <div class="inner-content">
                                    <div class="thumb">
                                        <a href="#"><span><img src="{{ $clases_[1]->url_image }}"
                                                    alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="#">{{ $clases_[1]->title1 }}</a></h4>
                                        <h4 class="class-time">{{ $clases_[1]->title2 }}</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <div class="inner-content">
                                    <div class="thumb">
                                        <a href="#"><span><img src="{{ $clases_[2]->url_image }}"
                                                    alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="#">{{ $clases_[2]->title1 }}</a></h4>
                                        <h4 class="class-time">{{ $clases_[2]->title2 }}</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <div class="inner-content">
                                    <div class="thumb">
                                        <a href="#"><span><img src="{{ $clases_[3]->url_image }}"
                                                    alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="#">{{ $clases_[3]->title1 }}</a></h4>
                                        <h4 class="class-time">{{ $clases_[3]->title2 }}</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <div class="inner-content">
                                    <div class="thumb">
                                        <a href="#"><span><img src="{{ $clases_[4]->url_image }}"
                                                    alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="#">{{ $clases_[4]->title1 }}</a></h4>
                                        <h4 class="class-time">{{ $clases_[4]->title2 }}</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <div class="inner-content">
                                    <div class="thumb">
                                        <a href="#"><span><img src="{{ $clases_[5]->url_image }}"
                                                    alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="#">{{ $clases_[5]->title1 }}</a></h4>
                                        <h4 class="class-time">{{ $clases_[5]->title2 }}</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Service Area ==-->


    <!--== Start Gallery Slider Area Wrapper ==-->
    <section class="gallery-area gallery-default-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4 pr-0">
                    <div class="section-title stitle-style2" data-aos="fade-up" data-aos-Duración="1000">
                        <div class="subtitle">GALERIA DE FITNESS</div>
                        <h2 class="title">CREER EN TI MISMO MÁS SALUDABLE</h2>
                    </div>
                </div>
                <div class="col-md-6 col-xl-8 d-none d-md-block text-center text-md-end">
                    <a href="#" class="btn-theme">Ver todo</a>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-slider-content">
                        <div class="swiper-container gallery-slider-container">
                            <div class="swiper-wrapper gallery-slider">
                                <div class="swiper-slide">
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <a class="lightbox-image" data-fancybox="gallery"
                                                href="{{ $fitness_[0]->url_image }}"><img
                                                    src="{{ $fitness_[0]->url_image }}" alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <a class="lightbox-image" data-fancybox="gallery"
                                                href="{{ $fitness_[1]->url_image }}"><img
                                                    src="{{ $fitness_[1]->url_image }}" alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <a class="lightbox-image" data-fancybox="gallery"
                                                href="{{ $fitness_[2]->url_image }}"><img
                                                    src="{{ $fitness_[2]->url_image }}" alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <a class="lightbox-image" data-fancybox="gallery"
                                                href="{{ $fitness_[3]->url_image }}"><img
                                                    src="{{ $fitness_[3]->url_image }}" alt="Image"></a>
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
    <!--== End Gallery Slider Area Wrapper ==-->

    <!--== Start Team Area ==-->
    <section class="team-area team-default-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-aos="fade-up" data-aos-Duración="1000">
                        <h2 class="title">Entrenadores <span>Profesionales</span></h2>
                        <div class="desc">
                            <p>{{ $entrenador_[0]->descripcion }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-Duración="1100">
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Team Item -->
                    <div class="team-item mb-md-30">
                        <div class="team-member">
                            <div class="thumb">
                                <a href="#"><img src="{{ $entrenador_[0]->url_image }}" alt="Image"></a>
                            </div>
                            <div class="content">
                                <div class="member-info">
                                    <h4 class="name"><a href="#">{{ $entrenador_[0]->title1 }}</a></h4>
                                    <h6 class="designation">{{ $entrenador_[0]->title2 }}</h6>
                                    <div class="social-icons">
                                        <a href="#/"><i class="fa fa-facebook icon"></i></a>
                                        <a href="#/"><i class="fa fa-phone icon"></i></a>
                                        <a href="#/"><i class="fa fa-instagram icon"></i></a>
                                        <a href="#/"><i class="fa fa-twitter icon"></i></a>
                                    </div>
                                    <div class="team-footer">
                                        <a class="btn" href="#">Ver Pefil</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Item -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Team Item -->
                    <div class="team-item mb-md-30">
                        <div class="team-member">
                            <div class="thumb">
                                <a href="#"><img src="{{ $entrenador_[1]->url_image }}" alt="Image"></a>
                            </div>
                            <div class="content">
                                <div class="member-info">
                                    <h4 class="name"><a href="#">{{ $entrenador_[1]->title1 }}</a></h4>
                                    <h6 class="designation">{{ $entrenador_[1]->title2 }}</h6>
                                    <div class="social-icons">
                                        <a href="#/"><i class="fa fa-facebook icon"></i></a>
                                        <a href="#/"><i class="fa fa-phone icon"></i></a>
                                        <a href="#/"><i class="fa fa-instagram icon"></i></a>
                                        <a href="#/"><i class="fa fa-twitter icon"></i></a>
                                    </div>
                                    <div class="team-footer">
                                        <a class="btn" href="#">Ver Pefil</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Item -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Team Item -->
                    <div class="team-item mb-xs-30">
                        <div class="team-member">
                            <div class="thumb">
                                <a href="#"><img src="{{ $entrenador_[2]->url_image }}" alt="Image"></a>
                            </div>
                            <div class="content">
                                <div class="member-info">
                                    <h4 class="name"><a href="#">{{ $entrenador_[2]->title1 }}</a></h4>
                                    <h6 class="designation">{{ $entrenador_[2]->title2 }}</h6>
                                    <div class="social-icons">
                                        <a href="#/"><i class="fa fa-facebook icon"></i></a>
                                        <a href="#/"><i class="fa fa-phone icon"></i></a>
                                        <a href="#/"><i class="fa fa-instagram icon"></i></a>
                                        <a href="#/"><i class="fa fa-twitter icon"></i></a>
                                    </div>
                                    <div class="team-footer">
                                        <a class="btn" href="#">Ver Pefil</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Item -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Team Item -->
                    <div class="team-item">
                        <div class="team-member">
                            <div class="thumb">
                                <a href="#"><img src="{{ $entrenador_[3]->url_image }}" alt="Image"></a>
                            </div>
                            <div class="content">
                                <div class="member-info">
                                    <h4 class="name"><a href="#">{{ $entrenador_[3]->title1 }}</a></h4>
                                    <h6 class="designation">{{ $entrenador_[3]->title2 }}</h6>
                                    <div class="social-icons">
                                        <a href="#/"><i class="fa fa-facebook icon"></i></a>
                                        <a href="#/"><i class="fa fa-phone icon"></i></a>
                                        <a href="#/"><i class="fa fa-instagram icon"></i></a>
                                        <a href="#/"><i class="fa fa-twitter icon"></i></a>
                                    </div>
                                    <div class="team-footer">
                                        <a class="btn" href="#/">Ver Pefil</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Item -->
                </div>
            </div>
        </div>
    </section>
    <!--== End Team Area ==-->

    <!--== Start Testimonial Area ==-->
    <section class="testimonial-area testimonial-default-area position-relative" style="    margin-bottom: 45px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title stitle-style2">
                        <div class="subtitle">TESTIMONIALS</div>
                        <h2 class="title">ESO ES LO QUE<br>CLIENT </span>DICE NUESTRO CLIENTE</h2>
                    </div>
                    <div class="testimonial-content" data-aos="fade-up" data-aos-Duración="1000">
                        <div class="testimonial-slider-content">
                            <div class="swiper-container testimonial-slider-container">
                                <div class="swiper-wrapper testimonial-slider">
                                    <div class="swiper-slide testimonial-single">
                                        <div class="client-content">
                                            <p>“Getshape es un gimnasio de sonido muy inteligente y técnico, que
                                                mantiene entrenadores
                                                profesionales y equipos modernos. para mantener nuestra salud luptas sit
                                                fugit, sed quia
                                                cuuntur mag dolores eos qui rat ione volupta placer racionalmente ”</p>
                                            <img class="quote-icon" src="/template_web/assets/img/icons/quote-icon.jpg"
                                                alt="Icon">
                                        </div>
                                        <div class="client-info">
                                            <h4 class="name">Stephen Fleming</h4>
                                            <h6 class="designation">Mariland, USA</h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonial-single">
                                        <div class="client-content">
                                            <p>“Getshape es un gimnasio de sonido muy inteligente y técnico, que
                                                mantiene entrenadores
                                                profesionales y equipos modernos. para mantener nuestra salud luptas sit
                                                fugit, sed quia
                                                cuuntur mag dolores eos qui rat ione volupta placer racionalmente ”</p>
                                            <img class="quote-icon" src="/template_web/assets/img/icons/quote-icon.jpg"
                                                alt="Icon">
                                        </div>
                                        <div class="client-info">
                                            <h4 class="name">Stephen Fleming</h4>
                                            <h6 class="designation">Mariland, USA</h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonial-single">
                                        <div class="client-content">
                                            <p>“Getshape es un gimnasio de sonido muy inteligente y técnico, que
                                                mantiene entrenadores
                                                profesionales y equipos modernos. para mantener nuestra salud luptas sit
                                                fugit, sed quia
                                                cuuntur mag dolores eos qui rat ione volupta placer racionalmente ”</p>
                                            <img class="quote-icon" src="/template_web/assets/img/icons/quote-icon.jpg"
                                                alt="Icon">
                                        </div>
                                        <div class="client-info">
                                            <h4 class="name">Stephen Fleming</h4>
                                            <h6 class="designation">Mariland, USA</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-btn-wrap">
                                    <div class="swiper-btn-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="swiper-btn-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bmi-calc-form bg-img" data-bg-img="/template_web/assets/img/testimonial/1.jpg">
                        <div class="section-title text-center mt-0">
                            <h2 class="title">BMI <span>CALCULADORA</span></h2>
                            <div class="desc">
                                <p>El IMC es una guía confiable para estimar el rango de peso saludable según la altura,
                                    el peso y
                                    la edad.</p>
                            </div>
                        </div>
                        <form action="#/">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Height / cm">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Weight / kg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Age">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control form-select" aria-label="gender select example">
                                            <option selected>Sexo</option>
                                            <option value="1">Femenino</option>
                                            <option value="2">Masculino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control form-select" aria-label="activity select example">
                                            <option selected>Selección de actividad</option>
                                            <option value="1">Uno</option>
                                            <option value="2">Dos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="bmi-calc-form-footer">
                                        <div class="form-group mb-0">
                                            <button class="btn btn-theme" type="button">CALCULADORA</button>
                                        </div>
                                        <div class="bmi-calc-result">
                                            <input class="form-control" type="text" placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-group">
            <div class="shape-img2">
                <img src="/template_web/assets/img/photos/shape1.png" alt="Image">
            </div>
        </div>
    </section>
    <!--== End Testimonial Area ==-->
</main>

@endsection

@section('footer_page')
<!--//=======Extra=======//-->
@endsection