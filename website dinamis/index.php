<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Dinamis Alfian</title>
    
    <!-- CSS Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Datatables -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
    
    <style>
        /* CSS untuk memastikan footer di bawah */
        html, body {
            height: 100%; /* Memastikan body mengambil seluruh tinggi layar */
            transition: background-color 0.5s, color 0.5s; /* Transisi halus */
        }

        body {
            display: flex;
            flex-direction: column; /* Mengatur elemen dalam kolom */
        }

        .container {
            flex: 1; /* Membuat konten mengambil sisa ruang yang ada */
        }

        /* Gaya untuk mode gelap */
        .dark-mode {
            background-color: #121212; /* Warna latar belakang gelap */
            color: #ffff00; /* Warna teks terang */
        }
    </style>
</head>
<body class="dark-mode"> <!-- Selalu dalam dark mode -->
    <header>
        <h1 class="text-center p-3">Website Dinamis</h1>
    </header>
    
    <!-- Menu -->
    <?php include "includes/navbar.php"; ?>
    <!-- ./Menu -->
    
    <!-- Konten -->
    <div class="container mt-3">
        <?php include "konten.php"; ?>
    </div>
    <!-- ./Konten -->
    
    <footer>
        <div class="text-bg-dark p-3 text-center mt-5">
            Alfian Nur Rizki @ <?= date("Y"); ?>
        </div>
    </footer>

    <!-- JS Scripts -->
    <script src="assets/jquery/jquery-3.7.1.js"></script>
    <script src="assets/datatables/dataTables.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script>
        new DataTable('#example');
    </script>
</body>
</html>