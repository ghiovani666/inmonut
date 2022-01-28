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

//:::::::::::: CRUD SERVICIOS :::::::::::::::::::::::::::::

listarDataTable()

function openModalTraining(id_descripcion, isValues) {

    if (isValues == "ELIMINAR") {

        if (confirm('Esta seguro de Eliminar?')) {
            let formData = new FormData();
            formData.append('txt_id_descripcion', id_descripcion)
            formData.append('isValues', isValues)
            axios.post('createServicioTraining',
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
                    listarDataTable()
                }

            }).catch(function() {
                console.log('FAILURE!!');
            });
        }

    } else {

        $('#modalTraining').modal('show')
        $('input[name=txt_id_descripcion]').val(id_descripcion)
        $('input[name=isValues]').val(isValues) //OPCION DE CREAR, ACTUALIZAR

        if (isValues == 'CREAR') {
            //LIMPIAR
            $('select[name=txt_titulo_principal]').val("");
            $('input[name=txt_sub_titulo]').val("");
            $('textarea[name=txt_descripcion]').val("");
            $('textarea[name=txt_url_link]').val("");
            $('img[name=txt_url_image]').attr('src', "https://sistemas.com/wp-content/uploads/2013/12/twitpic.png");
            $("input[name=image]").val(null);
        }

        if (id_descripcion) {
            let formData = new FormData();
            formData.append('txt_id_descripcion', id_descripcion)
            axios.post('editServicioTraining',
                formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(function(response) {

                $('select[name=txt_titulo_principal]').val(response.data[0].id_titulo);
                $('input[name=txt_sub_titulo]').val(response.data[0].title);
                $('textarea[name=txt_descripcion]').val(response.data[0].descripcion);
                $('textarea[name=txt_url_link]').val(response.data[0].url_link);
                $('img[name=txt_url_image]').attr('src', response.data[0].url_image);

            }).catch(function() {
                console.log('FAILURE!!');
            });
        }
    }
}


$('#uploadFormTraining').on('submit', function(e) {
    e.preventDefault();
    $('#modalTraining').modal('hide')
    let formData = new FormData(this);
    axios.post('createServicioTraining',
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

            listarDataTable()
        }

    }).catch(function() {
        console.log('FAILURE!!');
    });

});

function listarDataTable() {

    $.ajax({
        type: 'get',
        dataType: 'html',
        url: 'listarDataTable',
        data: "txt_apertura=" + 1,
        success: function(response) {
            $('#updateDiv').html(response);
        }
    });

}
// ::::::::::::::::: SELECCIONAR IMAGEN :::::::::::::::::::::::::::
$("#inputGroupFile01").change(function(event) {
    RecurFadeIn();
    readURL(this);
});
$("#inputGroupFile01").on('click', function(event) {
    RecurFadeIn();
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        var filename = $("#inputGroupFile01").val();
        filename = filename.substring(filename.lastIndexOf('\\') + 1);
        reader.onload = function(e) {
            //   debugger;      
            $('#blah').attr('src', e.target.result);
            $('#blah').hide();
            $('#blah').fadeIn(500);
            $('.custom-file-label').text(filename);
        }
        reader.readAsDataURL(input.files[0]);
    }
    $(".alert").removeClass("loading").hide();
}

function RecurFadeIn() {
    console.log('ran');
    FadeInAlert("Wait for it...");
}

function FadeInAlert(text) {
    $(".alert").show();
    $(".alert").text(text).addClass("loading");
}

// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


$('select[name=txt_id_servicio]').on('change click', function() {
    const id_servicio = this.value;
    handleSecundario(id_servicio)
});
const handleSecundario = (id_servicio) => {
    axios.post('changeServicioTraining', {
            'txt_id_servicio': id_servicio,
        })
        .then(function(response) {
            $('select[name=txt_titulo_principal]').html(response.data);
        }).catch(function(error) {
            if (error.response.status) {
                alert('No existe la medida.! Gracias')
            }
        })
}