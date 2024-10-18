<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Persuratan Dosen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-blue-800 p-4 shadow-lg">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <div class="text-white text-2xl">
                    PERSURATAN DOSEN
                </div>
                <div class="text-white">
                    <a href="#" class="px-4 hover:underline">Home</a>
                    <a href="#" class="px-4 hover:underline">Profile</a>
                    <a href="#" class="px-4 hover:underline">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar dan Main Content -->
    <div class="flex flex-no-wrap">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-900 h-screen shadow-lg">
            <div class="p-6">
                <ul class="mt-6">
                    <li class="mb-4">
                        <a href="javascript:void(0);" id="catatan-dosen-link" class="block py-2 px-4 hover:bg-blue-700 text-white rounded-lg">
                            Catatan Cuti
                        </a>
                    </li>
                    <li class="mb-4">
                    <a href="javascript:void(0);" id="cuti-dosen-link" class="block py-2 px-4 hover:bg-blue-700 text-white rounded-lg">
                            Cuti Dosen
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="javascript:void(0);" id="jenis-cuti-link" class="block py-2 px-4 hover:bg-blue-700 text-white rounded-lg">
                            Jenis Cuti
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h1 class="text-3xl font-bold mb-4"id="page-title"></h1>
            <div class="bg-white shadow-lg rounded-lg p-6" id="content">
            </div>
        </div>
    </div>

    <script>
        const cutidosenLink = document.getElementById('cuti-dosen-link');
        const jeniscutiLink = document.getElementById('jenis-cuti-link');
        const catatancutilink = document.getElementById('catatan-dosen-link');

        if (cutidosenLink) {
            cutidosenLink.addEventListener('click', function () {
                // Mengganti judul halaman
                document.getElementById('page-title').innerText = 'Cuti Dosen';

                // Mengambil konten dari view/jenis-cuti/index.php menggunakan Fetch API
                fetch('view/cuti-dosen/index.php')
                    .then(response => response.text())
                    .then(data => {
                        // Memasukkan konten yang diambil ke dalam #content
                        document.getElementById('content').innerHTML = data;
                    })
                    .catch(error => console.error('Error fetching the content:', error));
            });
        }

        if (jeniscutiLink) {
            jeniscutiLink.addEventListener('click', function () {
                // Mengganti judul halaman
                document.getElementById('page-title').innerText = 'Jenis Cuti';

                // Mengambil konten dari view/jenis-cuti/index.php menggunakan Fetch API
                fetch('view/jenis-cuti/index.php')
                    .then(response => response.text())
                    .then(data => {
                        // Memasukkan konten yang diambil ke dalam #content
                        document.getElementById('content').innerHTML = data;    
                    })
                    .catch(error => console.error('Error fetching the content:', error));
            });
        }

        if (catatancutilink) {
            catatancutilink.addEventListener('click', function () {
                // Mengganti judul halaman
                document.getElementById('page-title').innerText = 'Catatan Cuti';

                // Mengambil konten dari view/jenis-cuti/index.php menggunakan Fetch API
                fetch('view/catatan-cuti/index.php')
                    .then(response => response.text())
                    .then(data => {
                        // Memasukkan konten yang diambil ke dalam #content
                        document.getElementById('content').innerHTML = data;
                    })
                    .catch(error => console.error('Error fetching the content:', error));
            });
        }
       
    </script>
</body>
</html>
