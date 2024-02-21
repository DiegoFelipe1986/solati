<!-- This is the Model -->
<?php
class User {
    private $id;
    private $name;
    private $username;
    private $email;
    private $city;

    public function __construct($id, $name, $username, $email, $city) {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->city = $city;
    }


    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCity() {
        return $this->city;
    }
}
?>
