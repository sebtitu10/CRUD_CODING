<?php
require_once "config/database.php";

// Crear instancia y conectar
$db = new Database();
$conn = $db->connect();

if ($conn) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "No se pudo conectar.";
}
