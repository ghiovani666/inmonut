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
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    <?php 
                    try {
                        $Products = DB::table('gallery')->paginate(6);
                    } catch (\Throwable $th) {
                        return back()->with('msg', 'No se encuentra Registro');
                    }
                    ?>
                    @if(count($Products)!=0)
                        @foreach ($Products as $data)





                        
            {{ csrf_field() }}
            <div id="post_data"></div>


                        @endforeach
                    @endif
                </div>
            <div class="clear"></div>
            <div class="col-md-12">
                <!--//==Pagination Start==//-->
                <div class="styled-pagination padB30 text-center">
                    <ul>
                        {{ $Products->links()}}
                    </ul>
                </div>
                <!--//==Pagination End==//-->

            </div>
        </section><!-- End Portfoio Section -->

    </div>
</section>


<!--/end container-->
@endsection


@push('scripts')
<script>
$(document).ready(function() {
    var _token = $('input[name="_token"]').val();
    load_data('', _token);

    function load_data(id = "", _token) {
        $.ajax({
            url: "/productoGaleriaLoad",
            method: "POST",
            data: {
                id: id,
                _token: _token
            },
            success: function(data) {
                $('#load_more_button').remove();
                $('#post_data').append(data);
            }
        })
    }

    $(document).on('click', '#load_more_button', function() {
        var id = $(this).data('id');
        $('#load_more_button').html('<b>Loading...</b>');
        load_data(id, _token);
    });

});
</script>
@endpush

@section('footer_page')
    <!-- js Galeria -->
    <script type="text/javascript" src="{{ URL::asset('web/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('web/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('web/assets/js/contacts.js') }}"></script>
@endsection