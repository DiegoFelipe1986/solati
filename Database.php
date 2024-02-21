<?php
require_once 'config.php';

class Database {
    private static $instance;
    private $servername;
    private $username;
    private $password;
    private $database;
    private $conn;

    private function __construct() {
        // Obtener los detalles de configuración de la base de datos desde config.php
        $this->servername = DB_HOST;
        $this->username = DB_USER;
        $this->password = DB_PASS;
        $this->database = DB_NAME;

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
?>
