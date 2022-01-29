@extends('web.layouts.base')

<!-- Titulo de la página -->
@section('title_page')
<title>Azulejos Rosa</title>
@endsection

<!-- Contenido en el Head de la pagina -->
@section('head_page')
<!-- extras -->

<!-- Template Main CSS File -->
<link rel="stylesheet" href="{{ URL::asset('web/assets/vendor/icofont/icofont.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('web/assets/vendor/boxicons/css/boxicons.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('web/assets/vendor/animate.css/animate.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('web/assets/vendor/venobox/venobox.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('web/assets/css/gallery.css') }}" />


@endsection

<!-- Contenido en el Body -->
@section('content')
<!--=== Content Part ===-->

<!--//==Page Header Start==//-->
<div class="page-header black-overlay">
    <div class="container breadcrumb-section">
        <div class="row pad-s15">
            <div class="col-md-12">
                <h2>Galería de Imagenes</h2>
                <div class="clear"></div>
                <div class="breadcrumb-box">
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Inicio</a>
                        </li>
                        <li class="active">Galería</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//==Page Header End==//-->

<section class="page_single portfoio">
    <div class="container">


        <!-- ======= Portfoio Section ======= -->
        <section id="portfolio" class="portfoio">
            <div class="container" data-aos="fade-up">


                <div class="section-title">
                    <h1 style="text-transform: uppercase;">Galería</h1>
                    <p style="font-family: Lato, Sans-Serif;font-size: 1.89rem;">Estos son nuestros productos mas destacados, la cual usted puede seleccionar nuestra gran variedad de modelos y recreaciones.</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Todos</li>
                            <!-- <li data-filter=".filter-app">Mamparas</li>
                            <li data-filter=".filter-card">Platos de Ducha</li>
                            <li data-filter=".filter-web">Puertas y Armarios</li> -->
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    <?php 
                    try {
                        $Arrays = DB::table('gallery')->paginate(6);
                    } catch (\Throwable $th) {
                        return back()->with('msg', 'No se encuentra Registro');
                    }
                    ?>
                    @if(count($Arrays)!=0)
                        @foreach ($Arrays as $data)
                        <div class="col-lg-4 col-md-6 portfolio-item {{$data->type_filter}}">
                            <img src="{{$data->url_image}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{$data->names}}</h4>
                                <p>{{$data->description}}</p>
                                <a href="{{$data->url_image}}" data-gall="portfolioGallery" class="venobox preview-link"
                                    title="{{$data->names}}"><i class="bx bx-plus"></i></a>
                                <a href="#!" class="details-link" title="Mas Detalles"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            <div class="clear"></div>
            <div class="col-md-12">
                <!--//==Pagination Start==//-->
                <div class="styled-pagination padB30 text-center">
                    <ul>
                        {{ $Arrays->links()}}
                    </ul>
                </div>
                <!--//==Pagination End==//-->

            </div>
        </section><!-- End Portfoio Section -->

    </div>
</section>


<!--/end container-->
@endsection

@section('footer_page')
    <!-- js Galeria -->
    <script type="text/javascript" src="{{ URL::asset('web/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('web/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('web/assets/js/contacts.js') }}"></script>
@endsection