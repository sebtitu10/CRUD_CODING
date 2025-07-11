<?php
include_once "../config/database.php";
include_once "../Usuario.php";

$db = (new Database())->connect();
$usuario = new Usuario($db);

$data = json_decode(file_get_contents("php://input"));
$usuario->id = $data->id;

if ($usuario->eliminar()) {
    echo json_encode(["mensaje" => "Usuario eliminado"]);
} else {
    echo json_encode(["mensaje" => "Error al eliminar usuario"]);
}
