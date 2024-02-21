<?php
require_once 'UserController.php';

$userController = new UserController();

$users = $userController->getAllUsers();

$usersArray = json_decode($users);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Listado de Usuarios</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Nombre de Usuario</th>
                    <th>Email</th>
                    <th>Ciudad</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($usersArray as $user) {
                    echo "<tr>";
                    echo "<td>{$user->id}</td>";
                    echo "<td>{$user->name}</td>";
                    echo "<td>{$user->username}</td>";
                    echo "<td>{$user->email}</td>";
                    echo "<td>{$user->city}</td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
