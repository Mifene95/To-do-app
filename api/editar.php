<?php

require '../inc/db.php';

header('Content-Type: application/json');

$id = $_POST['id'];

if (empty($id)) {
    die(json_encode(['error' => 'ID no válido']));
}

$stmt = $pdo->prepare('UPDATE tareas SET estado = "completado" WHERE id = ?');
$stmt->execute([$id]);


echo json_encode(['success' => true]);
