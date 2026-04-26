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
            },
            error: function(){
                console.log("Error en la peticion")
            }
        })
            
        
    });

});

