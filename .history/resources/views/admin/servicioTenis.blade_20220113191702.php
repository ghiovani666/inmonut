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
            <div class="col-12 col-sm-6">
              <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                  <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                        href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                        aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                        href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                        aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                        href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages"
                        aria-selected="false">Messages</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                        href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings"
                        aria-selected="false">Settings</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-one-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                      aria-labelledby="custom-tabs-one-home-tab">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui
                      molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio
                      magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi,
                      vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et
                      malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante
                      et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem.
                      Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non
                      consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras
                      lacinia erat eget sapien porta consectetur.
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                      aria-labelledby="custom-tabs-one-profile-tab">
                      Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula
                      tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas
                      sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu
                      lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod
                      pellentesque diam.
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                      aria-labelledby="custom-tabs-one-messages-tab">
                      Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue
                      id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac
                      tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit
                      condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique.
                      Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est
                      libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id
                      fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                      aria-labelledby="custom-tabs-one-settings-tab">
                      Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac,
                      ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi
                      euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum
                      placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam.
                      Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet
                      accumsan ex sit amet facilisis.
                    </div>
                  </div>
                </div>
                <!-- /.card -->
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                  <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                    <li class="pt-2 px-3">
                      <h3 class="card-title">Card Title</h3>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill"
                        href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home"
                        aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill"
                        href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile"
                        aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill"
                        href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages"
                        aria-selected="false">Messages</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill"
                        href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings"
                        aria-selected="false">Settings</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel"
                      aria-labelledby="custom-tabs-two-home-tab">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui
                      molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio
                      magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi,
                      vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et
                      malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante
                      et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem.
                      Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non
                      consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras
                      lacinia erat eget sapien porta consectetur.
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel"
                      aria-labelledby="custom-tabs-two-profile-tab">
                      Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula
                      tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas
                      sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu
                      lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod
                      pellentesque diam.
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel"
                      aria-labelledby="custom-tabs-two-messages-tab">
                      Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue
                      id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac
                      tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit
                      condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique.
                      Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est
                      libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id
                      fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel"
                      aria-labelledby="custom-tabs-two-settings-tab">
                      Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac,
                      ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi
                      euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum
                      placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam.
                      Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet
                      accumsan ex sit amet facilisis.
                    </div>
                  </div>
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>


          
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
                                <div id="imagen_superior">
                                    <img class="card-img-top" src="{{$rows->superior_url_image}}" alt="Photo">
                                </div>

                                <div class="card-img-overlay d-flex flex-column justify-content-end"
                                    style="margin-bottom: 45px;">
                                    <a href="javascript:void(0)"
                                        onclick="openModalServicios({{ $rows->id_servicio }} ,'superior')"
                                        class="btn btn-danger btn-sm"><i class="far fa-thumbs-up"></i> Subir Imagen</a>
                                </div>
                            </div>

                            <a href="/template_admin/img/modelo/modelo_servicio_2.jpg" class="btn btn-primary btn-sm"
                                download><i class="far fa-thumbs-up"></i>
                                Descargar Modelo</a>

                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card mb-2 bg-gradient-dark">
                                <div id="imagen_inferior">
                                    <img class="card-img-top" src="{{$rows->inferior_url_image}}" alt="Photo">
                                </div>

                                <div class="card-img-overlay d-flex flex-column justify-content-end"
                                    style="margin-bottom: 45px;">
                                    <a href="javascript:void(0)"
                                        onclick="openModalServicios({{ $rows->id_servicio }},'inferior' )"
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




    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="pull-right" style="text-align: center;">
                        <a class="btn btn-success" href="#"> Crear Servicio</a>
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
                                            <button type="button"
                                                class="btn btn-block bg-gradient-success">Editar</button>
                                            <button type="button"
                                                class="btn btn-block bg-gradient-danger">Eliminar</button>
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


@endsection