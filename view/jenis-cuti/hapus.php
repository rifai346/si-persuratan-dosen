<?php
require_once '../../app/config/database.php';
require_once '../../app/model/crud-detail-jenis-cuti.php';

$database = new Database();
$db = $database->dbConnection();
$crud = new crudjenis($db);

// Periksa apakah 'id' ada di URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id']; // Ambil id dari URL
    $crud->delete($id); // Panggil metode delete dengan id yang valid
    header("Location: index.php");
    exit;
} else {
    // Jika id tidak ada, redirect atau berikan pesan error
    header("Location: index.php?error=invalid_id"); // Redirect dengan pesan error
    exit;
}
?>
