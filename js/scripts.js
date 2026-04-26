$(document).ready(function(){

    $('#btn-crear').click(function(){
        let tarea = $('#input-id').val();
        console.log(tarea)

        $.ajax({
            url: 'api/crear.php',
            method: 'POST',
            data: {
                nombre: tarea
            },
            success: function(respuesta){
                console.log(respuesta);
                cargarTareas();
            },
            error: function(){
                console.log("Error en la peticion")
            }
        })
    });

    cargarTareas();

    function cargarTareas(){

        $.ajax({
            url: 'api/listar.php',
            method: 'GET',

            success: function(tareas){
                $('#tabla-tareas').empty();
                $.each(tareas, function(indice, tarea){
                    let fila = `
                    <tr>
                    <td>${tarea.id}</td>
                    <td>${tarea.nombre}</td>
                    <td>${tarea.estado}</td>
                    <td>
                    <button class="btn btn-sm btn-danger">Borrar</button>
                    <button class="btn btn-sm btn-success">Completar</button>
                </td>
            </tr>
                    `
                $('#tabla-tareas').append(fila);

                }
        )}
            
        })
    }

});

