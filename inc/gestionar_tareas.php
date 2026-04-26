<?php

require "../inc/db.php";

if ($_POST) {
    if (($_POST['action']) === "crear") {
        $nombre_tarea = $_POST["tarea"];

        try {

            $stmt = $pdo->prepare("INSERT INTO tareas (nombre) VALUES (?)");
            $resultado = $stmt->execute([$nombre_tarea]);

            if ($resultado) {
                echo "ok";
            } else {
                echo "error";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    if (($_POST["action"]) === "borrar") {
        $id_tarea = $_POST["id"];

        try {
            $stmt = $pdo->prepare("DELETE from tareas WHERE id = ?");
            $resultado = $stmt->execute([$id_tarea]);

            if ($resultado) {
                echo "ok";
            } else {
                echo "error";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $pdo->query("SELECT * FROM tareas");
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
