<?php
require_once '../../app/config/database.php';
require_once '../../app/model/crud-detail-cuti-dosen.php';
require_once '../../app/model/crud-detail-jenis-cuti.php';
require_once '../../app/model/crud-detail-catatan-cuti.php';

// Initialize database connection
$database = new Database();
$db = $database->dbConnection();

// Initialize CRUD classes
$crud = new Crud($db);
$show = new Crudjenis($db);
$pilih = new Crudcatatan($db);

// Fetch all records
$result = $crud->read();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Cuti Dosen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto mt-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Daftar Cuti Dosen</h1>
            <a href="tambah.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Tambah Cuti
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead>
                    <tr class="bg-blue-500 text-white text-left">
                        <th class="py-3 px-4">No</th>
                        <th class="py-3 px-4">Nama</th>
                        <th class="py-3 px-4">Jabatan</th>
                        <th class="py-3 px-4">Unit Kerja</th>
                        <th class="py-3 px-4">NIP</th>
                        <th class="py-3 px-4">Masa Kerja</th>
                        <th class="py-3 px-4">Jenis Cuti</th>
                        <th class="py-3 px-4">Alasan Cuti</th>
                        <th class="py-3 px-4">Catatan Cuti</th>
                        <th class="py-3 px-4">Alamat Selama Cuti</th>
                        <th class="py-3 px-4">Perubahan</th>
                        <th class="py-3 px-4">Ditangguhkan</th>
                        <th class="py-3 px-4">TTD Dosen</th>
                        <th class="py-3 px-4">TTD Atasan</th>
                        <th class="py-3 px-4">Awal Cuti</th>
                        <th class="py-3 px-4">Akhir Cuti</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4">Telepon</th>
                        <th class="py-3 px-4">Keterangan</th>
                        <th class="py-3 px-4">Dosen</th>
                        <th class="py-3 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <?php
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        // Fetch the related data from jenis_cuti and catatan_cuti tables
                        $jenisCuti = $show->getJenisCutiById($row['jenis_cuti_id']);
                        $catatanCuti = $pilih->getCatatanCutiById($row['catatan_cuti_id']);
                    ?>
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-4"><?php echo $no++?></td>
                        <td class="py-3 px-4"><?php echo $row['nama']?></td>
                        <td class="py-3 px-4"><?php echo $row['jabatan']?></td>
                        <td class="py-3 px-4"><?php echo $row['unit_kerja']?></td>
                        <td class="py-3 px-4"><?php echo $row['nip']?></td>
                        <td class="py-3 px-4"><?php echo $row['masa_kerja']?></td>
                        <td class="py-3 px-4"><?php echo $jenisCuti['jenis_cuti']?></td> <!-- Display jenis cuti -->
                        <td class="py-3 px-4"><?php echo $row['alasan_cuti']?></td>
                        <td class="py-3 px-4"><?php echo $catatanCuti['nama_catatan_cuti']?></td> <!-- Display catatan cuti -->
                        <td class="py-3 px-4"><?php echo $row['alamat_selama_cuti']?></td>
                        <td class="py-3 px-4"><?php echo $row['perubahan']?></td>
                        <td class="py-3 px-4"><?php echo $row['ditangguhkan']?></td>
                        <td class="py-3 px-4"><?php echo $row['ttd_dsn']?></td>
                        <td class="py-3 px-4"><?php echo $row['ttd_atasan']?></td>
                        <td class="py-3 px-4"><?php echo $row['awal_cuti']?></td>
                        <td class="py-3 px-4"><?php echo $row['akhir_cuti']?></td>
                        <td class="py-3 px-4"><?php echo $row['status']?></td>
                        <td class="py-3 px-4"><?php echo $row['telepon']?></td>
                        <td class="py-3 px-4"><?php echo $row['keterangan']?></td>
                        <td class="py-3 px-4"><?php echo $row['dosen_id']?></td>
                        <td class="py-3 px-4">
                            <a href="edit.php?action=edit&id=<?php echo $row['cuti_id']?>" class="text-blue-500 hover:text-blue-700">Edit</a> |
                            <a href="koneksi.php?action=delete&id=<?php echo $row['cuti_id']?>" class="text-red-500 hover:text-red-700">Hapus</a>
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
