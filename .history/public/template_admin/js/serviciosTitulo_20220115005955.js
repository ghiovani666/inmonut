function listarDataTable() {

    $.ajax({
        type: 'get',
        dataType: 'html',
        url: 'listarDataTable',
        data: "txt_apertura=" + 1,
        success: function (response) {
            $('#dataTableTitulo').html(response);
        }
    });

}

listarDataTable()