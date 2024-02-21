<?php
require_once 'config.php';

/**
 * Clase Database que gestiona la conexión a la base de datos.
 */

class Database {
    /**
     * @var Database La instancia única de la clase Database.
     */

    private static $instance;

    /**
     * @var string El nombre del servidor de la base de datos.
     */

    private $servername;

    /**
     * @var string El nombre de usuario de la base de datos.
     */

    private $username;

    /**
     * @var string La contraseña de la base de datos.
     */

    private $password;

    /**
     * @var string El nombre de la base de datos.
     */

    private $database;

    /**
     * @var mysqli La conexión a la base de datos.
     */
    private $conn;

    /**
     * Constructor privado para evitar la creación de instancias externas.
     */

    private function __construct() {
        $this->servername = DB_HOST;
        $this->username = DB_USER;
        $this->password = DB_PASS;
        $this->database = DB_NAME;

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }

    /**
     * Obtiene una instancia única de la clase Database.
     *
     * @return Database La instancia única de la clase Database.
     */

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Obtiene la conexión a la base de datos.
     *
     * @return mysqli La conexión a la base de datos.
     */

    public function getConnection() {
        return $this->conn;
    }

    /**
     * Cierra la conexión a la base de datos.
     */
    
    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}

?>
