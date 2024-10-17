<!DOCTYPE html>
<html>
<head>
    <title>My App | Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #86b7fe;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Edit Data Dokter</h3>
                </div>
                <div class="card-body">
                    <?php
                    include 'model_koneksi.php';

                    $panggil = $koneksi->query("SELECT * FROM dokter WHERE idDokter='$_GET[edit]'");

                    while ($row = $panggil->fetch_assoc()) {
                    ?>
                    <form action="model_koneksi.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="idDokter" name="idDokter" placeholder="ID Dokter" value="<?= $row['idDokter'] ?>" readonly>
                            <label for="idDokter">ID Dokter</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nmDokter" name="nmDokter" placeholder="Nama Dokter" value="<?= $row['nmDokter'] ?>">
                            <label for="nmDokter">Nama Dokter</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="spesialisasi" name="spesialisasi" placeholder="Spesialisasi" value="<?= $row['spesialisasi'] ?>">
                            <label for="spesialisasi">Spesialisasi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="noTelp" name="noTelp" placeholder="No Telepon" value="<?= $row['noTelp'] ?>">
                            <label for="noTelp">No Telepon</label>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan1" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>