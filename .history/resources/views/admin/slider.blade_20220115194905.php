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
                        <li class="breadcrumb-item active">Slider && Footer</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6">
                    <!-- Box Comment -->
                    <div class="card card-widget">
                        <div class="card-header">
                            <div class="user-block">
                                <img class="img-circle" src="/template_admin/dist/img/user1-128x128.jpg"
                                    alt="User Image">
                                <span class="username"><a href="#">Panel Principal</a></span>
                            </div>
                            <!-- /.user-block -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" title="Mark as read">
                                    <i class="far fa-circle"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" id="imagen_{{$slider_xx[0]->id_home}}">
                            <img class="img-fluid pad" src="{{$slider_xx[0]->url_image}}" alt="Photo">
                            <h6>{{$slider_xx[0]->title1}}</h6>
                            <h6>{{$slider_xx[0]->title2}}</h6>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="/template_admin/img/modelo/model_h-1.png" class="btn btn-primary btn-sm"
                                download><i class="far fa-thumbs-up"></i> Descargar Modelo</a>
                            <a href="javascript:void(0)" onclick="openModal({{ $slider_xx[0]->id_home }},'slider' )"
                                class="btn btn-danger btn-sm"><i class="far fa-thumbs-up"></i> Subir Imagen</a>

                            <span class="float-right text-muted">Descarga los Modelos - Imagenes</span>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>

                <!-- /.col -->
                <div class="col-md-6">
                    <!-- Box Comment -->
                    <div class="card card-widget">
                        <div class="card-header">
                            <div class="user-block">
                                <img class="img-circle" src="/template_admin/dist/img/user1-128x128.jpg"
                                    alt="User Image">
                                <span class="username"><a href="#">Footer</a></span>
                            </div>
                            <!-- /.user-block -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" title="Mark as read">
                                    <i class="far fa-circle"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div id="msj_alert" style="width: 100%;"></div>
                            </div>

                            <div class="row">
                                <p>Descarga las medidas de las imagenes, luego utiliza el photoshop y luego subélas a la
                                    web.</p>
                                <div class="user-block" style="margin-bottom: 25px;">


                                    <img class="attachment-img" src="{{$footer_[0]->url_image}}" alt="User Image"
                                        style="height: 85px;width: 145px;background: black;">

                                    <a href="/template_admin/img/modelo/logo-light.png" class="btn btn-primary btn-sm"
                                        download><i class="far fa-thumbs-up"></i>
                                        Descargar Modelo</a><br />
                                </div>
                            </div>

                            <form id="uploadFooter">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-block">

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Subir logo</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="txt_footer_image" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Descripcion del Logo</label>
                                                <div class="col-sm-10">
                                                    <textarea type="text" name="txt_footer_descripcion_logo"
                                                        class="form-control">{{$footer_[0]->descripcion  }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Horario</label>
                                                <div class="col-sm-10">
                                                    <textarea type="text" name="txt_footer_horario"
                                                        class="form-control">{{$footer_[0]->horario}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Dirección</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="txt_footer_direccion" class="form-control"
                                                        value="{{$footer_[0]->direccion}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Teléfono</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="txt_footer_telefono" class="form-control"
                                                        value="{{$footer_[0]->telefono}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Web</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="txt_footer_web" class="form-control"
                                                        value="{{$footer_[0]->web}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Boletin</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="txt_footer_boletin" class="form-control"
                                                        value="{{$footer_[0]->boletin}}" />
                                                </div>
                                            </div>
                                            <!-- REDES SOSCIALES -->
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">URL FACEBOOK</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="txt_footer_facebook" class="form-control"
                                                        value="{{$footer_[0]->red_social_facebook}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">URL ISTAGRAM</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="txt_footer_instagram" class="form-control"
                                                        value="{{$footer_[0]->red_social_instagram}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">URL TWETTER</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="txt_footer_tweter" class="form-control"
                                                        value="{{$footer_[0]->red_social_tweter}}" />
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
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->
            <h5 class="mb-2">Lista de Sub Imagenes</h5>
            <a href="/template_admin/img/modelo/model_f1.jpg" class="btn btn-primary btn-sm" download><i
                    class="far fa-thumbs-up"></i> Descargar Modelo</a>
            <div class="card card-success">
                <div class="card-body">
                    <div class="row text-center">

                        @foreach($slider_ as $rows)
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card mb-2 bg-gradient-dark">
                                <div id="imagen_{{$rows->id_home}}">
                                    <img class="card-img-top" src="{{$rows->url_image}}" alt="Photo">
                                    <h6>{{$rows->title1}}</h5>
                                        <h6>{{$rows->title2}}</h5>
                                </div>

                                <div class="card-img-overlay d-flex flex-column justify-content-end"
                                    style="margin-bottom: 45px;">
                                    <a href="javascript:void(0)" onclick="openModal({{ $rows->id_home }},'slider' )"
                                        class="btn btn-danger btn-sm"><i class="far fa-thumbs-up"></i> Subir Imagen</a>
                                </div>
                            </div>
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
                        <input type="hidden" name="txt_values" value="slider" />
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