<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>WEB TODO</title>
</head>

<body>
    <div class="container col-6 text-center mt-4 p-3 bg-light">
        <h1>Lista de tareas</h1>
        <div class="d-flex gap-2 mt-3">
            <input id="input-id" class="form-control" type="text" placeholder="Escribe una nueva tarea">
            <button id="btn-crear" class="btn btn-success">Crear tarea</button>
        </div>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ToDo</th>
                    <th scope="col">Done</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody id="tabla-tareas">
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>

                    <td><button class="btn btn-sm btn-danger">Borrar</button>
                        <button class="btn btn-sm btn-success">Completar</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>