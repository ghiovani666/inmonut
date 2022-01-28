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
                        <li class="breadcrumb-item active">Tenis</li>
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
                                aria-selected="true">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                                aria-selected="false">Servicio</a>
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
                                    <div id="msj_alert"></div>
                                    <form id="saveServiciosTraining">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="txt_values" value="1" />
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-block">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Superior: Titulo</label>
                                                        <div class="col-sm-10">
                                                            <textarea type="text" name="superior_titulo1"
                                                                class="form-control">{{$clases_[0]->superior_titulo1  }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Superior:
                                                            Description</label>
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
                                                        <label class="col-sm-2 col-form-label">Inferior: Titulo</label>
                                                        <div class="col-sm-10">
                                                            <textarea type="text" name="inferior_titulo"
                                                                class="form-control">{{$clases_[0]->inferior_titulo  }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Inferior:
                                                            Description</label>
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
                                                        <div id="imagen_superior">
                                                            <img class="card-img-top"
                                                                src="{{$rows->superior_url_image}}" alt="Photo">
                                                        </div>

                                                        <div class="card-img-overlay d-flex flex-column justify-content-end"
                                                            style="margin-bottom: 45px;">
                                                            <a href="javascript:void(0)"
                                                                onclick="openModalServicios({{ $rows->id_servicio }} ,'superior')"
                                                                class="btn btn-danger btn-sm"><i
                                                                    class="far fa-thumbs-up"></i> Subir Imagen</a>
                                                        </div>
                                                    </div>

                                                    <a href="/template_admin/img/modelo/modelo_servicio_2.jpg"
                                                        class="btn btn-primary btn-sm" download><i
                                                            class="far fa-thumbs-up"></i>
                                                        Descargar Modelo</a>

                                                </div>
                                                <div class="col-md-12 col-lg-6 col-xl-3">
                                                    <div class="card mb-2 bg-gradient-dark">
                                                        <div id="imagen_inferior">
                                                            <img class="card-img-top"
                                                                src="{{$rows->inferior_url_image}}" alt="Photo">
                                                        </div>

                                                        <div class="card-img-overlay d-flex flex-column justify-content-end"
                                                            style="margin-bottom: 45px;">
                                                            <a href="javascript:void(0)"
                                                                onclick="openModalServicios({{ $rows->id_servicio }},'inferior' )"
                                                                class="btn btn-danger btn-sm"><i
                                                                    class="far fa-thumbs-up"></i> Subir Imagen</a>
                                                        </div>
                                                    </div>
                                                    <a href="/template_admin/img/modelo/modelo_servicio_1.png"
                                                        class="btn btn-primary btn-sm" download><i
                                                            class="far fa-thumbs-up"></i>
                                                        Descargar Modelo</a>
                                                </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>


                                </div><!-- /.container-fluid -->
                            </section>
                            <!-- /.content -->
                        </div>

                        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                            aria-labelledby="custom-tabs-one-profile-tab">
                            <!-- Main content -->
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div id="msj_alert_crear"></div>
                                        <div class="col-12">
                                            <div class="pull-right" style="text-align: center;">
                                                <a href="javascript:void(0)" onclick="openModalTraining(false)"
                                                    class="btn btn-block bg-gradient-success"><i
                                                        class="far fa-edit"></i> Crear Servicio</a>
                                            </div>

                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">DataTable de servicios</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Titulo Principal</th>
                                                                <th>Sub titulo</th>
                                                                <th>Descripcion</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach ($rowData_ as $rows)
                                                            <tr>
                                                                <td>{{ $rows->titulo_principal }}</td>
                                                                <td>{{ $rows->title }}</td>
                                                                <td>{{ $rows->descripcion }}</td>
                                                                <td>
                                                                    <a href="javascript:void(0)"
                                                                        onclick="openModalTraining({{ $rows->id_descripcion }} )"
                                                                        class="btn btn-block bg-gradient-success"><i
                                                                            class="far fa-edit"></i> Editar</a>
                                                                    <a href="javascript:void(0)"
                                                                        onclick="openModalTraining({{ $rows->id_descripcion }} )"
                                                                        class="btn btn-block bg-gradient-danger"><i
                                                                            class="fas fa-trash-alt"></i> Eliminar</a>
                                                                </td>

                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Titulo Principal</th>
                                                                <th>Sub titulo</th>
                                                                <th>Descripcion)</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
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

                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>




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
                    <form id="uploadFormServicios">
                        <input type="hidden" name="txt_id_home" />
                        <input type="hidden" name="txt_values" />
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-block">
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





    <!-- Modal -->
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
                        <input type="hidden" name="txt_id_titulo" />
                        <input type="hidden" name="txt_id_servicio" value="1" />
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="card card-primary">
                                    <div class="card-body">
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
                                                        <input type="file" name="image" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
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