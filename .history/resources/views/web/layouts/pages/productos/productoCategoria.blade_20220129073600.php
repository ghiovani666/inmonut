@extends('web.layouts.base')

<!-- Titulo de la página -->
@section('title_page')
<title>Template Prueba</title>
@endsection

<!-- Contenido en el Head de la pagina -->
@section('head_page')
<!-- extras -->

@endsection

<!-- Contenido en el Body -->
@section('content')
<!--=== Content Part ===-->
<!--//==Page Header Start==//-->
<div class="page-header black-overlay">
    <div class="container breadcrumb-section">
        <div class="row pad-s15">
            <div class="col-md-12">
                <h2>Composición</h2>
                <div class="clear"></div>
                <div class="breadcrumb-box">
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Inicio</a>
                        </li>
                        <li class="active">Lista de Ofertas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//==Page Header End==//-->

<!--//=========product Page Start=========//-->
<section class="wa-products-main padTB100">
    <div class="container">
        <div class="row">

            <!--features_items-->
            <b> Total Productos</b>: {{$Products->total()}}
            <h2 class="title text-center">
                <?php
                        if (isset($msg)) {
                            echo $msg;
                        } else {
                            ?>
                <?php if(!empty($Products[0]->names)) { ?>
                <div id="filters-container" class="cbp-l-filters-text content-xs">
                    <div class="header-v5" style="background: black;margin-bottom: 25px;position: unset;">
                        <h1 style="margin-bottom: 15px;color: white;padding: 15px 0px 0px 0px;text-align: center;">

                            <?php echo $Products[0]->names ?>

                        </h1>
                    </div>
                </div>
                <?php }else{echo "";}?>
                <?php } ?>
            </h2>

            <?php if ($Products->isEmpty()) { ?>
            Lo siento, Productos no encontrados
            <?php } else {
                            $countP=0;?>

           



            {{ csrf_field() }}
     <div id="post_data"></div>




        </div>
    </div>




</section>
</div>
<!--/end container-->
@endsection

@section('footer_page')

@endsection


@push('scripts')


<script>
   
  </script>
  

@endpush