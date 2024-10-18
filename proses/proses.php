<?php


require_once '../app/config/database.php';
require_once '../app/model/crud-detail-jenis-cuti.php';

$database = new Database();
$db = $database->dbConnection();
$crud = new Crud($db);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['create'])) {
        $jenis_cuti = $_POST['jenis_cuti'];
        if ($crud->create($jenis_cuti)) {
            echo "Data berhasil ditambahkan.";
        } else {
            echo "Terjadi kesalahan saat menambahkan data.";
        }
    }
    if(isset($_POST['update'])) {
        $crud->update($_POST['id'], $_POST['jenis_cuti']);
    }
    if(isset($_POST['delete'])) {
        $crud->delete($_POST['id']);
    }
}
header("location:../view/jenis-cuti/index.php");
exit;