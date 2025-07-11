<?php
include_once "../config/database.php";
include_once "../Usuario.php";

$db = (new Database())->connect();
$usuario = new Usuario($db);

$stmt = $usuario->leer();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($resultado);
