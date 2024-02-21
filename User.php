<?php
/**
 * Clase User representa un usuario con información básica.
 */
class User {
    /**
     * @var int El ID del usuario.
     */
    
    private $id;

    /**
     * @var string El nombre del usuario.
     */

    private $name;

    /**
     * @var string El nombre de usuario del usuario.
     */

    private $username;

    /**
     * @var string El correo electrónico del usuario.
     */

    private $email;

    /**
     * @var string La ciudad del usuario.
     */

    private $city;

    /**
     * Constructor de la clase User.
     *
     * @param int $id El ID del usuario.
     * @param string $name El nombre del usuario.
     * @param string $username El nombre de usuario del usuario.
     * @param string $email El correo electrónico del usuario.
     * @param string $city La ciudad del usuario.
     */

    public function __construct($id, $name, $username, $email, $city) {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->city = $city;
    }

    /**
     * Obtiene el ID del usuario.
     *
     * @return int El ID del usuario.
     */

    public function getId() {
        return $this->id;
    }

    /**
     * Obtiene el nombre del usuario.
     *
     * @return string El nombre del usuario.
     */

    public function getName() {
        return $this->name;
    }

    /**
     * Obtiene el nombre de usuario del usuario.
     *
     * @return string El nombre de usuario del usuario.
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Obtiene el correo electrónico del usuario.
     *
     * @return string El correo electrónico del usuario.
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Obtiene la ciudad del usuario.
     *
     * @return string La ciudad del usuario.
     */
    public function getCity() {
        return $this->city;
    }
}

?>
