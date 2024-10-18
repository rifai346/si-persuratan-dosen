<?php
require_once '../../app/config/database.php';
require_once '../../app/model/crud-detail-jenis-cuti.php';

$database = new Database();
$db = $database->dbConnection();
$crud = new crudjenis($db);

// Mendapatkan id dari query string
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $row = $crud->getById($id);
}

// Memproses data jika form di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jenisCuti = $_POST['jenis_cuti'];
    $id = $_POST['jenis_cuti_id'];

    // Update data
    if ($crud->update($id, $jenisCuti)) {
        header("Location: /si_persuratan_dosen/view/jenis-cuti/index.php");
        exit();
    } else {
        echo "Terjadi kesalahan saat memperbarui data.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jenis Cuti</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-lg mx-auto mt-10">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-700">Edit Jenis Cuti</h1>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <form action="edit.php" method="post" class="space-y-4">
                <div>
                    <label for="jenisCuti" class="block text-sm font-medium text-gray-700">Jenis Cuti</label>
                    <input type="text" id="jenisCuti" name="jenis_cuti" value="<?= $row['jenis_cuti'] ?>" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Masukkan jenis cuti">
                    <input type="hidden" name="jenis_cuti_id" value="<?= $row['jenis_cuti_id'] ?>">
                </div>

                <div class="text-right">
                    <button type="submit" class="inline-flex justify-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Simpan</button>
                    <a href="dashboard.php" class="inline-flex justify-center px-4 py-2 bg-gray-600 text-white rounded-md ml-2">Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
