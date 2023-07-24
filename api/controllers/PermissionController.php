<?php
require_once './models/PermissionModel.php';

class PermissionController {

    private $model;

    public function __construct($conn) {
        $this->model = new PermisionModel($conn);
    }

    public function getPermissions() {
        $users = $this->model->getPermissions();
        return $users;
    }

    public function getPermissionById($id) {
        $user = $this->model->getPermissionById($id);
        return $user;
    }

    // Otros métodos del controlador...
    public function savePermission($request) {
        $user = $this->model->savePermission($request);
        return $user;
    }
    
    public function updatePermission($roleId) {
        $user = $this->model->getPermissionByRoleId($roleId);
        return $user;
    }
}
?>
