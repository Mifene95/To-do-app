$(document).ready(function(){

    
    $('#btn-agregar').click(function(){

        let nombre_tarea = $('#tarea').val();

        $.ajax({
            url: '../inc/gestionar_tareas.php',
            method: 'POST',
            data: {
                action: 'crear',
                tarea: nombre_tarea
            },
            success: function(respuesta){

                if(respuesta === "ok"){
                    alert("Tarea guardada");
                    cargarTareas(); // recargar lista
                } else {
                    alert("Error en servidor: " + respuesta);
                }

            },
            error: function(xhr){
                console.log(xhr.responseText);
            }
        });

    });

    // 👉 cargar tareas al abrir página
    cargarTareas();

});

function cargarTareas() {

    $.ajax({
        url: '../inc/gestionar_tareas.php',
        method: 'GET',
        success: function(respuesta) {

            let tareas = JSON.parse(respuesta);

            let html = "";

            tareas.forEach(function(tarea){
                html += `
                    <tr class="tarea" id="${tarea.id}">
                        <td>${tarea.nombre}</td>
                        <td><span class="badge bg-warning">${tarea.estado}</span></td>
                        <td>
                            <a href="#"  class="btn btn-sm btn-success">Hecha</a>
                            <a href="#" id="borrar-tarea" class="btn btn-sm btn-danger">Borrar</a>
                        </td>
                    </tr>
                `;
            });

            $('#tabla-tareas').html(html);
        }
    });

}

$(document).on('click', '#borrar-tarea', function() {
    let id = $(this).closest('tr').attr('id');
    
    $.ajax({
        url: '../inc/gestionar_tareas.php',
        method: 'POST',
        data: {
            action: 'borrar',
            id: id
        },
        success: function(respuesta){
            if(respuesta === "ok"){
                alert("tarea eliminada")
                cargarTareas();
            }else{
                alert("error al borrar tarea")
            }
        }
    })

});




