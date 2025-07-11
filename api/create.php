<?php
include_once "../config/database.php";
include_once "../Usuario.php";

$db = (new Database())->connect();
$usuario = new Usuario($db);

$data = json_decode(file_get_contents("php://input"));

$usuario->nombre = $data->nombre;
$usuario->correo = $data->correo;
$usuario->rol = $data->rol;
$usuario->empresa = $data->empresa;

if ($usuario->crear()) {
    echo json_encode(["mensaje" => "Usuario creado"]);
} else {
    echo json_encode(["mensaje" => "Error al crear usuario"]);
}
