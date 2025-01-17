<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script>
        function hapus(id) {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                window.location.href = 'model_koneksi.php?idPasien=' + id;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./controller_index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./controller_dokter.php">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./controller_pasien.php">Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./controller_kunjungan.php">Kunjungan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card">
        <div class="card-header">
            <h3>Tabel Pasien</h3>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                    <a href="view_tambahpasien.php" class="btn btn-primary btn-sm">Tambah Data</a>
                </div>
            </div>
            <table class="table table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'model_koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM pasien");
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['idPasien']; ?></td>
                        <td><?= $row['nmPasien']; ?></td>
                        <td><?= $row['jk']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td>
                            <a href="view_editpasien.php?edit=<?= $row['idPasien']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm" onclick="return hapus('<?= $row['idPasien']; ?>')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Nf2pFdBoi1MquU9a1w4gWFGmbFiF" crossorigin="anonymous"></script>
</body>
</html>
