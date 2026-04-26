<?php

require_once '../inc/db.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

$nombre = $_POST['nombre'];

if (empty($nombre)) {
    die(json_encode(['error' => 'El nombre no puede estar vacio']));
};

$stmt = $pdo->prepare("INSERT INTO tareas (nombre, estado) VALUES (?, ?)");
$stmt->execute([$nombre, "pendiente"]);

echo json_encode(['success' => true]);
