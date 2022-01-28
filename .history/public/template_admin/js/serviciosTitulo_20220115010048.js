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