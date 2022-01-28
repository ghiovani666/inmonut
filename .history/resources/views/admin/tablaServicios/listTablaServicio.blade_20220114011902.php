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
                <a href="javascript:void(0)" onclick="openModalTraining({{ $rows->id_descripcion }},'ACTUALIZAR' )"
                    class="btn btn-block bg-gradient-success"><i class="far fa-edit"></i> Editar</a>
                <a href="javascript:void(0)" onclick="openModalTraining({{ $rows->id_descripcion }},'ELIMINAR' )"
                    class="btn btn-block bg-gradient-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
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

<script>

$(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });

// $('#txt_ancho').on('change', function() {
//     const txt_id_medida = this.value

//     $.ajax({
//         type: 'get',
//         dataType: 'html',

//         data: "txt_id_medida=" + txt_id_medida + "&txt_valor=" + true,
//         success: function(response) {
//             $('#updateDiv').html(response);
//         }
//     });

//     $.ajax({
//         type: 'get',
//         dataType: 'html',

//         data: "txt_id_medida=" + txt_id_medida + "&txt_valor=" + true,
//         success: function(response) {
//             $('#txt_fichas').html(response);
//         }
//     });
// });


</script>