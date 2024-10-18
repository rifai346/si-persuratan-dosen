<?php

class Crudcatatan
{
    private $conn;
    private $table_name = "detail_catatan_cuti";

    public function __construct($db)
    {
        $this->conn = $db;

    }

    public function getcatatanCutiById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE catatan_cuti_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_Param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result(); // Mendapatkan hasil query
        return $result->fetch_assoc();
    }

    public function read()
    {

        $query = "SELECT * FROM detail_catatan_cuti";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->get_result();
    }
}
