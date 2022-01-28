function listarDataTableTitulo() {

    $.ajax({
        type: 'get',
        dataType: 'html',
        url: 'listarDataTableTitulo',
        data: "txt_apertura=" + 1,
        success: function (response) {
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
            ).then(function (response) {
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

            }).catch(function () {
                console.log('FAILURE!!');
            });
        }

    } else {

        $('#modalTitulo').modal('show')
        $('input[name=txt_id_titulo]').val(id_titulo)
        $('input[name=isValues]').val(isValues) //OPCION DE CREAR, ACTUALIZAR

        if (isValues == 'CREAR') {
            //LIMPIAR
            $('textarea[name=txt_id_titulo]').val("");
        }

        if (id_titulo) {
            let formData = new FormData();
            formData.append('txt_id_titulo', id_titulo)
            axios.post('editServicioTraining',
                formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
            ).then(function (response) {

                $('input[name=txt_titulo_principal]').val(response.data[0].titulo_principal);

            }).catch(function () {
                console.log('FAILURE!!');
            });
        }
    }
}