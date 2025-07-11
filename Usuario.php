<?php
class Usuario {
    private $conn;
    private $table = "usuarios";

    public $id;
    public $nombre;
    public $correo;
    public $rol;
    public $empresa;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function crear() {
    $query = "INSERT INTO $this->table (nombre, correo, rol, empresa) VALUES (:nombre, :correo, :rol, :empresa)";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(":nombre", $this->nombre);
    $stmt->bindParam(":correo", $this->correo);
    $stmt->bindParam(":rol", $this->rol);
    $stmt->bindParam(":empresa", $this->empresa);


        return $stmt->execute();
    }

    public function leer() {
        $query = "SELECT * FROM $this->table";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function actualizar() {
        $query = "UPDATE $this->table SET nombre=:nombre, correo=:correo, rol=:rol, empresa=:empresa WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":correo", $this->correo);
        $stmt->bindParam(":rol", $this->rol);
        $stmt->bindParam(":empresa", $this->empresa);

        return $stmt->execute();
    }

    public function eliminar() {
        $query = "DELETE FROM $this->table WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);

        return $stmt->execute();
    }

    public function buscar($valor) {
    $query = "SELECT * FROM $this->table WHERE nombre LIKE :valor OR correo LIKE :valor OR empresa LIKE :valor";
    $stmt = $this->conn->prepare($query);

    $valor = "%{$valor}%";
    $stmt->bindParam(":valor", $valor);
    $stmt->execute();

    return $stmt;
}

}
