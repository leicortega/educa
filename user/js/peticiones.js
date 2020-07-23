$(document).ready(function () {

    // llamado a la funcion para cargar la tabla
    cargar_tabla();

    // Peticion AJAX para crear institucion
    $('#registrar_institucion_form').submit(function () {
        $.ajax({
            url: 'php/crear_institucion.php',
            type: 'POST',
            data: $('#registrar_institucion_form').serialize(),
            success: function (data) {
                if (data == 1) {
                    $('#institucion-alert').removeClass('d-none').removeClass('bg-danger').addClass('bg-success')
                    $('#content-alert').text('CORRECTO - la institucion se creo correctamente')

                    $('#modal-agregar').modal('hide')
                    $('#registrar_institucion_form')[0].reset()

                    cargar_tabla()
                } else {
                    $('#institucion-alert').removeClass('d-none').removeClass('bg-success').addClass('bg-danger')
                    $('#content-alert').text('ERROR - la institucion NO se creo correctamente')

                    $('#modal-agregar').modal('hide')
                }
            }
        })

        return false;
    })

    // Peticion AJAX para editar institucion
    $('#editar_institucion_form').submit(function () {
        $.ajax({
            url: 'php/editar_institucion.php',
            type: 'POST',
            data: $('#editar_institucion_form').serialize(),
            success: function (data) {
                if (data == 1) {
                    $('#institucion-alert').removeClass('d-none').removeClass('bg-danger').addClass('bg-success')
                    $('#content-alert').text('CORRECTO - la institucion se actualizo correctamente')

                    $('#modal-editar').modal('hide')
                    $('#editar_institucion_form')[0].reset()

                    cargar_tabla()
                } else {
                    $('#institucion-alert').removeClass('d-none').removeClass('bg-success').addClass('bg-danger')
                    $('#content-alert').text('ERROR - la institucion NO se actualizo correctamente')

                    $('#modal-editar').modal('hide')
                }
            }
        })

        return false;
    })


});

// funcion con peticion AJAX para mostrar las instituciones creadas
function cargar_tabla() {
    $.ajax({
        url: 'php/cargar_tabla.php',
        type: 'POST',
        success: function (data) {
            $('#staff02').html(data)
        }
    })
}

// funcion para mostrar los datos de la institucion
function show_institucion(id) {
    $.ajax({
        url: 'php/show_institucion.php',
        type: 'POST',
        data: { id:id },
        success: function (data) {
            $('#content_modal_editar').html(data)
            
            $('#modal-editar').modal('show')
        }
    })
}

// funcion para mostrar la institucion a eliminar
function delete_institucion(id, nombre) {
    $('#content_modal_eliminar').text('¿Seguro desea eliminar '+nombre+'?')
    $('#id_eliminar').val(id)

    $('#modal-eliminar').modal('show')
}

// funcion para eliminar la institucion
function eliminar_institucion() {
    $.ajax({
        url: 'php/delete_institucion.php',
        type: 'POST',
        data: { id:$('#id_eliminar').val() },
        success: function (data) {
            if (data == 1) {
                $('#institucion-alert').removeClass('d-none').removeClass('bg-danger').addClass('bg-success')
                $('#content-alert').text('CORRECTO - la institucion se elimino correctamente')

                $('#modal-eliminar').modal('hide')

                cargar_tabla()
            } else {
                $('#institucion-alert').removeClass('d-none').removeClass('bg-success').addClass('bg-danger')
                $('#content-alert').text('ERROR - la institucion NO se elimino correctamente')

                $('#modal-eliminar').modal('hide')
            }
        }
    })
}