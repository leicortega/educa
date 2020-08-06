$(document).ready(function () {

    // llamado a la funcion para cargar la tabla
    cargar_tabla();

    // Peticion AJAX para crear alumnos
    $('#registrar_alumno_form').submit(function () {
        $.ajax({
            url: 'php/alumnos/registrar_alumnos.php',
            type: 'POST',
            data: $('#registrar_alumno_form').serialize(),
            success: function (data) {
                // console.log(data)
                if (data == 1) {
                    $('#sede-alert').removeClass('d-none').removeClass('bg-danger').addClass('bg-success')
                    $('#content-alert').text('CORRECTO - El alumno se registro correctamente')

                    $('#modal-agregar').modal('hide')
                    $('#registrar_alumno_form')[0].reset()

                    cargar_tabla()
                } else {
                    $('#sede-alert').removeClass('d-none').removeClass('bg-success').addClass('bg-danger')
                    $('#content-alert').text('ERROR - El alumno NO se registro correctamente')

                    $('#modal-agregar').modal('hide')
                }
            }
        })

        return false;
    })

    // Peticion AJAX para editar alumnos
    $('#editar_alumno_form').submit(function () {
        $.ajax({
            url: 'php/alumnos/editar_alumno.php',
            type: 'POST',
            data: $('#editar_alumno_form').serialize(),
            success: function (data) {
                if (data == 1) {
                    $('#sede-alert').removeClass('d-none').removeClass('bg-danger').addClass('bg-success')
                    $('#content-alert').text('CORRECTO - El alumno se actualizo correctamente')

                    $('#modal-editar').modal('hide')
                    $('#editar_sede_form')[0].reset()

                    cargar_tabla()
                } else {
                    $('#sede-alert').removeClass('d-none').removeClass('bg-success').addClass('bg-danger')
                    $('#content-alert').text('ERROR - El alumno NO se actualizo correctamente')

                    $('#modal-editar').modal('hide')
                }
            }
        })

        return false;
    })


});

// funcion con peticion AJAX para mostrar los alumnos registrados
function cargar_tabla() {
    $.ajax({
        url: 'php/alumnos/cargar_tabla.php',
        type: 'POST',
        success: function (data) {
            $('#staff02').html(data)
        }
    })
}

// funcion para mostrar los datos de los alumnos
function show_alumno(id) {
    $.ajax({
        url: 'php/alumnos/show_alumno.php',
        type: 'POST',
        data: { id:id },
        success: function (data) {
            $('#content_modal_editar').html(data)
            
            $('#modal-editar').modal('show')
        }
    })
}

// funcion para mostrar los alumnos a eliminar
function delete_alumno(id, nombre) {
    $('#content_modal_eliminar').text('¿Seguro desea eliminar '+nombre+'?')
    $('#id_eliminar').val(id)

    $('#modal-eliminar').modal('show')
}

// funcion para eliminar los alumnos
function eliminar_alumno() {
    $.ajax({
        url: 'php/alumnos/delete_alumno.php',
        type: 'POST',
        data: { id:$('#id_eliminar').val() },
        success: function (data) {
            if (data == 1) {
                $('#sede-alert').removeClass('d-none').removeClass('bg-danger').addClass('bg-success')
                $('#content-alert').text('CORRECTO - El alumno se elimino correctamente')

                $('#modal-eliminar').modal('hide')

                cargar_tabla()
            } else {
                $('#sede-alert').removeClass('d-none').removeClass('bg-success').addClass('bg-danger')
                $('#content-alert').text('ERROR - El alumno NO se elimino correctamente')

                $('#modal-eliminar').modal('hide')
            }
        }
    })
}