<?php
require_once '../../app/config/database.php';
require_once '../../app/model/crud-detail-jenis-cuti.php';

$database = new Database();
$db = $database->dbConnection();
$crud = new crudjenis($db);

$result = $crud->read();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Persuratan Dosen</title>
    <!-- Import Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Link untuk tambah jenis cuti -->
    <div class="p-6">
        <a href="view/jenis-cuti/tambah.php" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700">
            Tambah Jenis Cuti
        </a>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <table class="min-w-full table-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 border border-gray-300">No</th>
                        <th class="px-4 py-2 border border-gray-300">Jenis Cuti</th>
                        <th class="px-4 py-2 border border-gray-300">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr class="hover:bg-gray-100 text-center">
                        <td class="border px-4 py-2 text-center"><?= $no++ ?></td>
                        <td class="border px-4 py-2"><?= $row['jenis_cuti'] ?></td>
                        <td class="border px-4 py-2">
                        <a href="/si_persuratan_dosen/view/jenis-cuti/edit.php?id=<?= $row['jenis_cuti_id'] ?>" class="text-blue-600 hover:underline">
                                Edit
                            </a>
                            <a href="hapus.php?id=<?= $row['jenis_cuti_id'] ?>" class="text-red-600 hover:underline ml-4">
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php   
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
