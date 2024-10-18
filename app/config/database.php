<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "si_persuratan_dosen";
    private $conn;

    public function dbConnection() {
        $this->conn = null;
        try{
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        }
        catch (PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
        
    }
}