
<?php

class UserModel {
    
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getUsers() {
        $sql = "SELECT * FROM usuarios";
        $result = $this->conn->query($sql);
        $users = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }

        return $users;
    }

    public function getUserByRoleId($type) {
        $sql = "SELECT * FROM usuarios WHERE role_id='".$type."'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result;
        }

        return [];
       
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM usuarios WHERE id='".$id."'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result;
        }

        return [];
       
    }

    public function saveUser($request) {
        $sql = "INSERT INTO usuarios ('documento', 'primer_nombre', 'segundo_nombre', 'rol_id', 'estado') values (".$request->documento.",".$request->primer_nombre.",".$request->segundo_nombre.",".$request->rol_id.", TRUE)";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result;
        }

        return null;
    }

    public function updateUser($request, $id) {
        $sql = "UPDATE usuarios SET documento=".$request->documento.", primer_nombre=".$request->primer_nombre.", segundo_nombre=".$request->segundo_nombre.", rol_id=".$request->rol_id.", estado=".$request->estado." where id=".$id."";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result;
        }

        return null;
    }

}
?>