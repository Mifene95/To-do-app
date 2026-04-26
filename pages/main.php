<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.4.0/dist/css/tabler.min.css" />
<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.4.0/dist/js/tabler.min.js"></script>


<div class="d-flex justify-content-center align-items-center min-vh-100">

    <div class="card" style="min-width: 700px;">
        <div class="card-body">

            <h1 class="text-center mb-4">TODO App</h1>

            <div class="d-flex mb-3">
                <input id="tarea" type="text" class="form-control me-2" placeholder="Escribe una tarea...">
                <button id="btn-agregar" class="btn btn-primary">Añadir</button>
            </div>

            <div class="table-responsive">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th>Tarea</th>
                            <th>Estado</th>
                            <th class="w-1">Acciones</th>
                        </tr>
                    </thead>

                    <tbody id="tabla-tareas">
                        <!-- TAREAS -->
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/scripts.js"></script>