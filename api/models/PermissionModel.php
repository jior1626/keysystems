
<?php

class PermissionModel {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getPermissions() {
        $sql = "SELECT * FROM permisos";
        $result = $this->conn->query($sql);
        $users = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }

        return $users;
    }

    public function getPermissionById($id) {
        $sql = "SELECT * FROM permisos WHERE id='".$id."'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result;
        }

        return [];
       
    }

    public function savePermission($request) {
        $sql = "INSERT INTO permisos ('nombre', 'ruta', 'estado') values (".$request->nombre.",".$request->ruta.", TRUE)";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result;
        }

        return null;
    }

    public function updatePermission($request, $id) {
        $sql = "UPDATE permisos SET nombre=".$request->nombre.", ruta=".$request->ruta.", estado=".$request->estado." where id=".$id."";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result;
        }

        return null;
    }

}
?>