<?php

class crudjenis{

    public $conn;
    private $table_name = "detail_jenis_cuti";

    public function __construct($db){
        $this->conn = $db;
    }

    public function getJenisCutiById($id) {
        $query = "SELECT jenis_cuti FROM " . $this->table_name . " WHERE jenis_cuti_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id); // Gunakan bind_param untuk MySQLi
        $stmt->execute();
        
        // Bind result to variables
        $stmt->bind_result($jenisCuti);
        
        // Fetch result
        if ($stmt->fetch()) {
            return ['jenis_cuti' => $jenisCuti]; // Return associative array with key matching the column name
        } else {
            return null; // Return null if no record found
        }
    }
    

    public function read(){
        $query = "SELECT * FROM ".$this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->get_result();
    }



    /**
     * Membuat data jenis cuti baru
     *
     * @param string $jenis_cuti nama jenis cuti yang akan dibuat
     * @return boolean true jika berhasil, false jika gagal
     */
        public function create($jenis_cuti){
        $query = "INSERT INTO ".$this->table_name." (jenis_cuti) VALUES (?)";
        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("s",$jenis_cuti);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getById($id) {
        $query = "SELECT * FROM ".$this->table_name." WHERE jenis_cuti_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id); // Menggunakan bind_param dengan tipe integer (i)
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc(); // Mengambil hasil sebagai array asosiatif
    }
    

    // Memperbarui data jenis cuti
    public function update($id, $jenisCuti) {
        $query = "UPDATE ".$this->table_name." SET jenis_cuti = ? WHERE jenis_cuti_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("si", $jenisCuti, $id); // Menggunakan bind_param dengan tipe string (s) dan integer (i)
        return $stmt->execute();
    }
    
    public function delete($id){
        $query = "DELETE FROM ".$this->table_name." WHERE jenis_cuti_id = ?";
        $stmt = $this->conn->prepare($query);

        $stmt->bind_Param("i",$id);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }


}

