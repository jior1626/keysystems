<?php
require_once './models/UserModel.php';

class UserController {
    private $model;

    public function __construct($conn) {
        $this->model = new UserModel($conn);
    }

    public function getUsers() {
        $users = $this->model->getUsers();

        // Puedes realizar cualquier procesamiento adicional aquí

        return $users;
    }

    public function getUserById($id) {
        $user = $this->model->getUserById($id);
        return $user;
    }

    public function getUserByRoleId($roleId) {
        $user = $this->model->getUserByRoleId($roleId);
        return $user;
    }

    // Otros métodos del controlador...
    public function saveUser($request) {

        $user = $this->model->saveUser($request);
        return $user;
    }
}
?>
