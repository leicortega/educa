$(document).ready(function () {

    // llamado a la funcion para cargar la tabla
    cargar_tabla();

    // Peticion AJAX para crear sede
    $('#registrar_sede_form').submit(function () {
        $.ajax({
            url: 'php/sede/crear_sede.php',
            type: 'POST',
            data: $('#registrar_sede_form').serialize(),
            success: function (data) {
                if (data == 1) {
                    $('#sede-alert').removeClass('d-none').removeClass('bg-danger').addClass('bg-success')
                    $('#content-alert').text('CORRECTO - la sede se creo correctamente')

                    $('#modal-agregar').modal('hide')
                    $('#registrar_sede_form')[0].reset()

                    cargar_tabla()
                } else {
                    $('#sede-alert').removeClass('d-none').removeClass('bg-success').addClass('bg-danger')
                    $('#content-alert').text('ERROR - la sede NO se creo correctamente')

                    $('#modal-agregar').modal('hide')
                }
            }
        })

        return false;
    })

    // Peticion AJAX para editar sede
    $('#editar_sede_form').submit(function () {
        $.ajax({
            url: 'php/sede/editar_sede.php',
            type: 'POST',
            data: $('#editar_sede_form').serialize(),
            success: function (data) {
                if (data == 1) {
                    $('#sede-alert').removeClass('d-none').removeClass('bg-danger').addClass('bg-success')
                    $('#content-alert').text('CORRECTO - la sede se actualizo correctamente')

                    $('#modal-editar').modal('hide')
                    $('#editar_sede_form')[0].reset()

                    cargar_tabla()
                } else {
                    $('#sede-alert').removeClass('d-none').removeClass('bg-success').addClass('bg-danger')
                    $('#content-alert').text('ERROR - la sede NO se actualizo correctamente')

                    $('#modal-editar').modal('hide')
                }
            }
        })

        return false;
    })


});

// funcion con peticion AJAX para mostrar las sedes creadas
function cargar_tabla() {
    $.ajax({
        url: 'php/sede/cargar_tabla.php',
        type: 'POST',
        success: function (data) {
            $('#staff02').html(data)
        }
    })
}

// funcion para mostrar los datos de la sede
function show_sede(id) {
    $.ajax({
        url: 'php/sede/show_sede.php',
        type: 'POST',
        data: { id:id },
        success: function (data) {
            $('#content_modal_editar').html(data)
            
            $('#modal-editar').modal('show')
        }
    })
}

// funcion para mostrar la sede a eliminar
function delete_sede(id, nombre) {
    $('#content_modal_eliminar').text('¿Seguro desea eliminar '+nombre+'?')
    $('#id_eliminar').val(id)

    $('#modal-eliminar').modal('show')
}

// funcion para eliminar la sede
function eliminar_sede() {
    $.ajax({
        url: 'php/sede/delete_sede.php',
        type: 'POST',
        data: { id:$('#id_eliminar').val() },
        success: function (data) {
            if (data == 1) {
                $('#sede-alert').removeClass('d-none').removeClass('bg-danger').addClass('bg-success')
                $('#content-alert').text('CORRECTO - la sede se elimino correctamente')

                $('#modal-eliminar').modal('hide')

                cargar_tabla()
            } else {
                $('#sede-alert').removeClass('d-none').removeClass('bg-success').addClass('bg-danger')
                $('#content-alert').text('ERROR - la sede NO se elimino correctamente')

                $('#modal-eliminar').modal('hide')
            }
        }
    })
}