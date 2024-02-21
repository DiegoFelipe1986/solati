<?php

/**
 * UserController
 * 
 * Esta clase maneja las operaciones relacionadas con los usuarios en la base de datos.
 */

require_once 'Database.php';
require_once 'User.php';

class UserController {
    public function getAllUsers(): string {
        // Obtiene una instancia de la base de datos
        $db = Database::getInstance();
        // Obtiene la conexión a la base de datos
        $conn = $db->getConnection();
    
        // Consulta SQL para seleccionar todos los usuarios
        $sql = "SELECT * FROM users";
        // Ejecuta la consulta SQL
        $result = $conn->query($sql);

        if (!$result) {
            throw new \Exception("Error al obtener los usuarios de la base de datos");
        }
    
        // Array para almacenar los usuarios
        $users = [];
        // Verifica si hay resultados de la consulta
        if ($result->num_rows > 0) {
            // Recorre los resultados y los agrega al array de usuarios
            while ($row = $result->fetch_assoc()) {
                $users[] = [
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'username' => $row['username'],
                    'email' => $row['email'],
                    'city' => $row['city']
                ];
            }
        }
    
        // Retorna los usuarios en formato JSON
        return json_encode($users);
    }
}
?>
