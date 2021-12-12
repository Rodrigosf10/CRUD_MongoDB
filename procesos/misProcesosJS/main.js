// Datatable
$(document).ready(function() {
    $('#idDatatable').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "Sin resultados similares",
            "info": "Registros: _PAGE_ a _PAGES_",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(Filtros totales: _MAX_ eregistrados)",
            "sSearch": "Buscar:",
            "oPaginate": { "sNext": "Siguiente", "sPrevious": "Anterior" }
        }
    });
});