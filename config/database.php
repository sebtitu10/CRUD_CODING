<?php
class Database {
    private $host = "localhost";
    private $port = "3307"; 
    private $db_name = "demo_db";
    private $username = "root";
    private $password = "12345";
    public $conn;

    public function connect() {
        $this->conn = null;
        try {
            // Agrega el puerto en el DSN
            $this->conn = new PDO(
                "mysql:host={$this->host};port={$this->port};dbname={$this->db_name}",
                $this->username,
                $this->password
            );
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

