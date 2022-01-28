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
                        <li class="breadcrumb-item active">Tabla de Servicios</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- ./row -->
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                aria-selected="true">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                                aria-selected="false">Titulos</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                            aria-labelledby="custom-tabs-one-home-tab">

                            <!-- Main content -->
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div id="msj_alert__"></div>
                                        <div class="col-12">
                                            <div class="pull-right" style="text-align: center;">
                                                <a href="javascript:void(0)" onclick="openModalTraining(false,'CREAR')"
                                                    class="btn btn-block bg-gradient-success"><i
                                                        class="far fa-edit"></i> Crear Servicio</a>
                                            </div>

                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">DataTable de servicios</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body" id="updateDiv">

                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.container-fluid -->
                            </section>
                            <!-- /.content -->

                        </div>

                        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                            aria-labelledby="custom-tabs-one-profile-tab">
                        </div>

                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

    <!-- Modal de CRUD-->
    <div class="modal fade" id="modalTraining" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="txt_tituloModal">Actualizar Servicio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="uploadFormTraining">
                        <input type="hidden" name="txt_id_descripcion" />
                        <input type="hidden" name="isValues" />
                        <!-- 1 : ES EL SERVICIO TENIS -->
                        <input type="hidden" name="txt_id_servicio" value="1" />
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="card card-primary">
                                    <div class="card-body">

                                    
                                    <div class="form-group">
                                            <div class="form-group">
                                                <label>Servicio</label>
                                                <select class="form-control" name="txt_titulo_principal">
                                                    @foreach ($rowData_cb_ as $rows)
                                                    <option value="{{ $rows->id_servicio }}">{{ $rows->superior_titulo1 }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Titulo Principal</label>
                                                <select class="form-control" name="txt_titulo_principal">
                                                    @foreach ($rowData_cb as $rows)
                                                    <option value="{{ $rows->id_titulo }}">{{ $rows->titulo_principal }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="txt_sub_titulo">Sub Titulo</label>
                                            <input type="text" class="form-control" name="txt_sub_titulo" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="txt_descripcion">Descripción</label>
                                            <textarea class="form-control" name="txt_descripcion" rows="3"
                                                placeholder="Enter ..." required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="txt_descripcion">URL Link</label>
                                            <textarea class="form-control" name="txt_url_link" rows="3"
                                                placeholder="Enter ..." required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <label class="col-sm-2 col-form-label">Subir Imagen</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" name="image" id="image" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" style="text-align: center">
                                            <div class="col-sm-12" style="margin-bottom: 20px">
                                                <img class="img-fluid"
                                                    src="https://sistemas.com/wp-content/uploads/2013/12/twitpic.png"
                                                    name="txt_url_image" alt="Photo">
                                            </div>
                                            <a href="/template_admin/img/modelo/medic.png"
                                                class="btn btn-primary btn-sm" download><i class="far fa-thumbs-up"></i>
                                                Descargar Modelo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn-primary" id="btn_sumit">Aplicar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection