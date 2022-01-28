@extends('admin.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color:white;">.</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Fitness</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div id="msj_alert"></div>
            <form id="saveServiciosTraining">
                {{ csrf_field() }}
                <input type="hidden" name="txt_values" value="1" />
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">superior_titulo1</label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="superior_titulo1"
                                        class="form-control">{{$clases_[0]->superior_titulo1  }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">superior_titulo2</label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="superior_titulo2"
                                        class="form-control">{{$clases_[0]->superior_titulo2  }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">inferior_titulo</label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="inferior_titulo"
                                        class="form-control">{{$clases_[0]->inferior_titulo  }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">inferior_descripcion</label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="inferior_descripcion"
                                        class="form-control">{{$clases_[0]->inferior_descripcion  }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">


                    <button class="btn btn-primary">Actualizar</button>
                </div>
            </form>

            <div class="card card-success">

                <div class="card-body">
                    <div class="row text-center">

                        @foreach($clases_ as $rows)
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card mb-2 bg-gradient-dark">
                                <div id="imagen_{{$rows->id_servicio}}">
                                    <img class="card-img-top" src="{{$rows->superior_url_image}}" alt="Photo">
                                </div>

                                <div class="card-img-overlay d-flex flex-column justify-content-end"
                                    style="margin-bottom: 45px;">
                                    <a href="javascript:void(0)" onclick="openModal({{ $rows->id_servicio }},'tenis' )"
                                        class="btn btn-danger btn-sm"><i class="far fa-thumbs-up"></i> Subir Imagen</a>
                                </div>
                            </div>

                            <a href="/template_admin/img/modelo/modelo_servicio_2.jpg" class="btn btn-primary btn-sm"
                                download><i class="far fa-thumbs-up"></i>
                                Descargar Modelo</a>

                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card mb-2 bg-gradient-dark">
                                <div id="imagen_{{$rows->id_servicio}}">
                                    <img class="card-img-top" src="{{$rows->inferior_url_image}}" alt="Photo">
                                </div>

                                <div class="card-img-overlay d-flex flex-column justify-content-end"
                                    style="margin-bottom: 45px;">
                                    <a href="javascript:void(0)" onclick="openModal({{ $rows->id_servicio }},'tenis' )"
                                        class="btn btn-danger btn-sm"><i class="far fa-thumbs-up"></i> Subir Imagen</a>
                                </div>
                            </div>
                            <a href="/template_admin/img/modelo/modelo_servicio_1.png" class="btn btn-primary btn-sm"
                                download><i class="far fa-thumbs-up"></i>
                                Descargar Modelo</a>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>

            
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="uploadForm">
                        <input type="hidden" name="txt_id_home" />
                        <input type="hidden" name="txt_values" value="fitness" />
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Titulo 1</label>
                                        <div class="col-sm-10">

                                            <textarea type="text" name="txt_titulo1" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Titulo 2</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" name="txt_titulo2" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Upload File</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>


@endsection