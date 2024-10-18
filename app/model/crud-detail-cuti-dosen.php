<?php

class crud {

    // database connection and table name

    public $conn;
    public $table_name = "cuti_dosen";

    // object properties

    public $id;
    public $nama;
    public $jabatan;
    public $unit_kerja;
    public $nip;
    public $masa_kerja;
    public $jenis_cuti;
    public $alasan_cuti;
    public $alamat_selama_cuti;
    public $awal_cuti;
    public $akhir_cuti;

    public function __construct($db) {
        $this->conn = $db;
    }


    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->get_result();
    }

//     public function create($id_cuti, $id_dosen) {
//         $query = "INSERT INTO ".$this->table_name." (id_cuti, id_dosen) VALUES (?, ?)";
// }
}