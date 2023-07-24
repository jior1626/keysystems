
<?php

class RolModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getRols() {
        $sql = "SELECT * FROM roles";
        $result = $this->conn->query($sql);
        $users = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }

        return $users;
    }

    public function getRolById($id) {
        $sql = "SELECT * FROM roles WHERE id='".$id."'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result;
        }

        return [];
       
    }

    public function saveRol($request) {
        $sql = "INSERT INTO roles ('nombre', 'descripcion', 'estado') values (".$request->nombre.",".$request->descripcion.", TRUE)";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result;
        }

        return null;
    }

    public function updateRol($request, $id) {
        $sql = "UPDATE roles SET nombre=".$request->nombre.", descripcion=".$request->descripcion.", estado=".$request->estado." where id=".$id."";
        $result = $this->conn->query($sql);

        if ($result) {
            return $result;
        }

        return null;
    }

}
?>