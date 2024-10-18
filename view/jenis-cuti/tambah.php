<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jenis Cuti</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-small tracking-normal ">

    <div class="container max-w-md mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6 text-center">Tambah Jenis Cuti</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="../../proses/proses.php" method="post">
                <div class="mb-4">
                    <label for="jenis_cuti" class="block text-gray-700 text-sm font-bold mb-2">Jenis Cuti:</label>
                    <input type="text" name="jenis_cuti" id="jenis_cuti" 
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                           placeholder="Masukkan jenis cuti" required>
                </div>

                <div class="flex items-center justify-between">
                    <input type="submit" name="create" value="Simpan" 
                           class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                </div>
            </form>
        </div>
    </div>

</body>
</html>
