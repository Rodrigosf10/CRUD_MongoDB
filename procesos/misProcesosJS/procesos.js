function agregar() {
    swal("Datos Guardados", "Registro Agregado Exitosamente", "success");
}

function actualizar() {
    swal("Datos Actualizados", "Registro Actualizado Exitosamente", "success");
}

function eliminar() {
    swal("Datos Eliminados", "Registro Eliminado Exitosamente", "success");
}

$(document).ready(function() {
    $('#btn_agregar').click(function() {
        agregar();
    });
    $('#btn_actualizar').click(function() {
        actualizar();
    });
    $('#btn_eliminar').click(function() {
        eliminar();
    });
});