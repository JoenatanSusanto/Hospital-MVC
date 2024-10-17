<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('https://via.placeholder.com/1920x1080'); /* Ganti URL dengan gambar latar belakang yang Anda inginkan */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-color: #f8f9fa; /* Cadangan warna latar belakang jika gambar tidak dimuat */
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand {
            color: #fff !important;
        }
        .nav-link {
            color: #fff !important;
        }
        .nav-link.active {
            color: #ffc107 !important;
        }
        .display-4 {
            margin-top: 30px;
            margin-bottom: 30px;
            color: #343a40;
        }
        .lead {
            margin-bottom: 50px;
            color: #6c757d;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 20px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./controller_dokter.php">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./controller_pasien.php">Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./controller_kunjungan.php">Kunjungan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <h1 class="display-4">Selamat Datang di MyApp</h1>
        <p class="lead">Aplikasi manajemen dokter, pasien, dan kunjungan</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Manajemen Dokter</h5>
                        <p class="card-text">Tambah, edit, dan hapus informasi dokter.</p>
                        <a href="./controller_dokter.php" class="btn btn-primary">Kelola Dokter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Manajemen Pasien</h5>
                        <p class="card-text">Tambah, edit, dan hapus informasi pasien.</p>
                        <a href="./controller_pasien.php" class="btn btn-primary">Kelola Pasien</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Manajemen Kunjungan</h5>
                        <p class="card-text">Tambah, edit, dan hapus informasi kunjungan.</p>
                        <a href="./controller_kunjungan.php" class="btn btn-primary">Kelola Kunjungan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
