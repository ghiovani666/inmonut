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

            @foreach($Products as $product)
            <input type="hidden" id="pro_id<?php echo $countP;?>" value="{{$product->id}}" />

            <!--product Item-->
            <div
                class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                <div class="wa-products">
                    <div class="wa-products-thumbnail wa-item">
                        <img src="<?php echo $product->url_image; ?>" alt="">
                        <div class="caption" style="cursor: pointer;"
                            onclick="window.location.href='/product_details_/{{$product->id}}';">
                            <div class="caption-text">
                                <ul class="wa-products-icon">
                                    <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="{{url('/product_details_')}}/{{$product->id}}"
                                            class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a>
                                    </li>
                                    <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a>
                                    </li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="wa-products-caption">
                        <h2>
                            <a href="{{url('/product_details_')}}/{{$product->id}}"
                                style="font-weight: normal !important;">
                                <?php  echo   $product->pro_name?>
                            </a>
                        </h2>
                    </div>
                </div>
            </div>
            
            <?php $countP++?>
            @endforeach
            <?php } ?>
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
        </div>
    </div>
</section>
</div>
<!--/end container-->
@endsection

@section('footer_page')
<script>

</script>
@endsection