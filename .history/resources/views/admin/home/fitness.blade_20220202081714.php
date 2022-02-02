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
            <!-- <form id="fitness_guardar_descripcion">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-block">
                            <h5 class="mb-2" style="text-align: center;">GALERIA DE FITNESS</h5>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Descripción</label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="txt_descripcion"
                                        class="form-control">{{$clases_[0]->descripcion  }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/template_admin/img/modelo/model_fitness.png" class="btn btn-primary btn-sm" download><i
                            class="far fa-thumbs-up"></i>
                        Descargar Modelo</a>

                    <button class="btn btn-primary">Actualizar</button>
                </div>
            </form> -->

            <div class="card card-success">


                <div class="card-body">
                    <div class="row text-center">

                        @foreach($clases_ as $rows)
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card mb-2 bg-gradient-dark">
                                <div id="imagen_{{$rows->id_home}}">
                                    <img class="card-img-top" src="{{$rows->url_image}}" alt="Photo">
                                    <h6>{{$rows->title1}}</h5>
                                        <h6>{{$rows->title2}}</h5>
                                </div>
                                <div class="card-img-overlay d-flex flex-column justify-content-end"
                                    style="margin-bottom: 45px;">
                                    <a href="/template_admin/img/modelo/{{ $rows->id_home }}.jpg"
                                        class="btn btn-primary btn-sm" download><i class="far fa-thumbs-up"></i>
                                        Descargar {{ $rows->id_home }}</a>
                                </div>

                                <a href="javascript:void(0)" onclick="openModal({{ $rows->id_home }},'fitness' )"
                                    class="btn btn-danger btn-sm"><i class="far fa-thumbs-up"></i> Subir Imagen</a>

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


@push('scripts')
<script>
// :::::::::::::::::::::::: CREAR REGISTRO ::::::::::::::::
$('#formServicioTitulo').on('submit', function(e) {
    e.preventDefault();
    $('#modalTitulo').modal('hide')
    let formData = new FormData(this);
    axios.post('servicioGrabarTitulo',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {
        if (response.data.state == "error") {
            $('#msj_alert__').html(
                    '<div class="alert alert-danger" role="alert">' + response.data.data + '</div>')
                .fadeOut(9500);
        } else {
            $('#msj_alert__').html(
                    '<div class="alert alert-success" role="alert">' + response.data.data + '</div>'
                )
                .fadeOut(9500);
            if (response.data.src) {
                $('img[name=txt_url_image]').attr('src', response.data.src);
            }

            listarDataTableTitulo()
        }

    }).catch(function() {
        console.log('FAILURE!!');
    });

});


function listarDataTableTitulo() {

    $.ajax({
        type: 'get',
        dataType: 'html',
        url: 'listarDataTableTitulo',
        data: "txt_apertura=" + 1,
        success: function(response) {
            $('#dataTableTitulo').html(response);
        }
    });

}

listarDataTableTitulo()

function openModalTitulo(id_titulo, isValues) {

    if (isValues == "ELIMINAR") {

        if (confirm('Esta seguro de Eliminar?')) {
            let formData = new FormData();
            formData.append('txt_id_titulo', id_titulo)
            formData.append('isValues', isValues)
            axios.post('servicioGrabarTitulo',
                formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(function(response) {
                if (response.data.state == "error") {
                    $('#msj_alert__').html(
                            '<div class="alert alert-danger" role="alert">' + response.data.data + '</div>')
                        .fadeOut(9500);
                } else {
                    $('#msj_alert__').html(
                            '<div class="alert alert-success" role="alert">' + response.data.data + '</div>'
                        )
                        .fadeOut(9500);
                    listarDataTableTitulo()
                }

            }).catch(function() {
                console.log('FAILURE!!');
            });
        }

    } else {

        $('#modalTitulo').modal('show')
        $('input[name=txt_id_titulo]').val(id_titulo)
        $('input[name=isValues]').val(isValues) //OPCION DE CREAR, ACTUALIZAR

        if (isValues == 'CREAR') {
            //LIMPIAR
            $('input[name=txt_titulo_principal]').val("");
        }

        if (id_titulo) {
            let formData = new FormData();
            formData.append('txt_id_titulo', id_titulo)
            axios.post('servicioEditarTitulo',
                formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(function(response) {

                $('select[name=txt_id_servicio]').val(response.data[0].id_servicio);
                $('input[name=txt_titulo_principal]').val(response.data[0].titulo_principal);

            }).catch(function() {
                console.log('FAILURE!!');
            });
        }
    }
}
</script>
@endpush