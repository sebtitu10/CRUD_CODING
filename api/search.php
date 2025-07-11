<?php
include_once "../config/database.php";
include_once "../Usuario.php";

$db = (new Database())->connect();
$usuario = new Usuario($db);

// Obtener palabra clave desde query param
$busqueda = isset($_GET['q']) ? $_GET['q'] : "";

$stmt = $usuario->buscar($busqueda);
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($resultado);
