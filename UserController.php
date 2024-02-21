<?php
require_once 'Database.php';
require_once 'User.php';

class UserController {
    
    public function getAllUsers() {
        $db = Database::getInstance();
        $conn = $db->getConnection();
    
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
    
        $users = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = array(
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'username' => $row['username'],
                    'email' => $row['email'],
                    'city' => $row['city']
                );
            }
        }
    
        return json_encode($users);
    }
}
?>
