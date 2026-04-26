<?php

require_once '../inc/db.php';

header('Content-Type: application/json');

$stmt = $pdo->prepare('SELECT * FROM tareas');
$stmt->execute();
$tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($tareas);
