<?php
require_once '../../app/config/database.php';
require_once '../../app/model/crud-detail-catatan-cuti.php';

$database = new Database();
$db = $database->dbConnection();
$crud = new Crudcatatan($db);

$result = $crud->read();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Catatan Cuti</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold text-center mb-6">Tabel Catatan Cuti</h1>
        
        <div class="flex justify-end mb-4">
            <a href="tambah-catatan.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Tambah Catatan Cuti
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead>
                    <tr class="bg-blue-500 text-white text-left">
                        <th class="py-3 px-4">No</th>
                        <th class="py-3 px-4">Nama Catatan Cuti</th>
                        <th class="py-3 px-4">Action</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                ?>
                <tbody class="text-gray-700">
                    <tr class="hover:bg-gray-100 text-center">
                        <td class="py-3 px-4"><?= $no++ ?></td>
                        <td class="py-3 px-4"><?= $row['nama_catatan_cuti'] ?></td>
                        <td class="py-3 px-4">
                            <a href="edit-catatan.php?id=<?= $row['catatan_cuti_id'] ?>" class="text-blue-600 hover:underline">
                                Edit
                            </a>
                            <a href="hapus.php?id=<?= $row['catatan_cuti_id'] ?>" class="text-red-600 hover:underline ml-4">
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
                <?php   
                }
               ?>
            </table>
        </div>
    </div>

</body>
</html>
