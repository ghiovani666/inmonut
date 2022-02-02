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
                        <li class="breadcrumb-item active">Localización</li>
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
            <form id="saveServiciosTrainingNovedad">
                {{ csrf_field() }}
                <input type="hidden" name="txt_values" value="6" />
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Superior: Título</label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="superior_titulo1"
                                        class="form-control">{{$clases_[0]->superior_titulo1  }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Superior: Descripción</label>
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
                                <label class="col-sm-2 col-form-label">Inferior: Título</label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="inferior_titulo"
                                        class="form-control">{{$clases_[0]->inferior_titulo  }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Inferior: Descripción</label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="inferior_descripcion"
                                        class="form-control">{{$clases_[0]->inferior_descripcion  }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">URL Mapa</label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="inferior_url_image"
                                        class="form-control">{{$clases_[0]->inferior_url_image  }}</textarea>
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
                    <form id="uploadFormServiciosNovedad">
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
</div>


@endsection



@push('scripts')
<script>
//******************global****************** */
function openModal(txt_id_home, isClass) {
    $('#exampleModal').modal('show')
    obtenerDatosModal(txt_id_home, isClass)
}

const obtenerDatosModal = (txt_id_home, isClass) => {
    $('input[name=txt_id_home]').val(txt_id_home);
    axios.post('dashboard_home_edit_imagen', {
            'txt_id_home': txt_id_home,
            'txt_isclass': isClass,
        })
        .then(function(response) {
            $('textarea[name=txt_titulo1]').val(response.data[0].title1);
            $('textarea[name=txt_titulo2]').val(response.data[0].title2);
        }).catch(function(error) {
            if (error.response.status) {
                alert('No existe ..! Gracias1')
            }
        })
}

$('#uploadForm').on('submit', function(e) {
    e.preventDefault();
    $('#exampleModal').modal('hide')
    let formData = new FormData(this);
    axios.post('dashboard_home_actualizar_imagen',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {
        $('#imagen_' + response.data[1]).html(response.data[0]);
    }).catch(function() {
        console.log('FAILURE!!');
    });

});

$('#uploadFooter').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    axios.post('dashboard_home_actualizar_footer',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {
        console.log('Successfully!!');
        $('#msj_alert').html(
                '<div class="alert alert-success" role="alert">Actualizado Correctamente.!</div>')
            .fadeOut(9500);
    }).catch(function() {
        console.log('FAILURE!!');
    });

});

// ********************clases************************ //

$('#clases_guardar_descripcion').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    axios.post('clases_guardar_descripcion',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {
        $('#msj_alert').html(
                '<div class="alert alert-success" role="alert">Actualizado Correctamente.!</div>')
            .fadeOut(9500);
    }).catch(function() {
        console.log('FAILURE!!');
    });

});
// ********************fitness************************ //

$('#fitness_guardar_descripcion').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    axios.post('fitness_guardar_descripcion',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {
        $('#msj_alert').html(
                '<div class="alert alert-success" role="alert">Actualizado Correctamente.!</div>')
            .fadeOut(9500);
    }).catch(function() {
        console.log('FAILURE!!');
    });

});

// ********************entrenador************************ //

$('#entrenador_guardar_descripcion').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    axios.post('entrenador_guardar_descripcion',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {
        $('#msj_alert').html(
                '<div class="alert alert-success" role="alert">Actualizado Correctamente.!</div>')
            .fadeOut(9500);
    }).catch(function() {
        console.log('FAILURE!!');
    });

});


//::::::::::::::::::::::::::::::::::::::SERVICIOS TRAININNG

$('#saveServiciosTraining').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    axios.post('saveServiciosTraining',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {
        $('#msj_alert').html(
                '<div class="alert alert-success" role="alert">Actualizado Correctamente.!</div>')
            .fadeOut(9500);
    }).catch(function() {
        console.log('FAILURE!!');
    });

});

function openModalServicios(id_servicio, txt_values) {
    $('#exampleModal').modal('show')
    $('input[name=txt_id_home]').val(id_servicio);
    $('input[name=txt_values]').val(txt_values);
}

$('#uploadFormServicios').on('submit', function(e) {
    e.preventDefault();
    $('#exampleModal').modal('hide')
    let formData = new FormData(this);
    axios.post('imagenServiciosTraining',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {

        if (response.data[1] == 'superior') {
            $('#imagen_superior').html(response.data[0]);
        } else {
            $('#imagen_inferior').html(response.data[0]);
        }

    }).catch(function() {
        console.log('FAILURE!!');
    });

});

//::::::::::::::::::::::::::::::::::::::SERVICIOS NOVEDADES

$('#saveServiciosTrainingNovedad').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    axios.post('saveServiciosNovedad',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {
        $('#msj_alert').html(
                '<div class="alert alert-success" role="alert">Actualizado Correctamente.!</div>')
            .fadeOut(9500);
    }).catch(function() {
        console.log('FAILURE!!');
    });

});

$('#uploadFormServiciosNovedad').on('submit', function(e) {
    e.preventDefault();
    $('#exampleModal').modal('hide')
    let formData = new FormData(this);
    axios.post('imagenServiciosNovedad',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {

        if (response.data[1] == 'superior') {
            $('#imagen_superior').html(response.data[0]);
        } else {
            $('#imagen_inferior').html(response.data[0]);
        }

    }).catch(function() {
        console.log('FAILURE!!');
    });

});


//::::::::::::::::::::::::::::::::::::::ACTUALIZAR BIENVENIDOS

$('#updateBienvenido').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    axios.post('updateBienvenido',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {
        console.log(response)
        setTimeout(() => {
            if (response.status == 200) {
                $('#msj_alert').html(
                        '<div class="alert alert-success" role="alert">' + response.data.data +
                        '</div>')
                    .fadeOut(9500);
            } else {
                $('#msj_alert').html(
                        '<div class="alert alert-danger" role="alert"> Error al actualizar</div>'
                        )
                    .fadeOut(9500);
            }
        }, 500);


    }).catch(function() {
        console.log('FAILURE!!');
    });

});
</script>
@endpush