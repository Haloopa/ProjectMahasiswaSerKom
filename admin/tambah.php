<?php
include '../config/koneksi.php';
include '../layout/header.php';

// query insert
if (isset($_POST['simpan'])) {

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $gender = $_POST['gender'];
    $usia = $_POST['usia'];

    $query = "INSERT INTO mahasiswa 
              (nim, nama, alamat, tanggal_lahir, gender, usia)
              VALUES 
              ('$nim', '$nama', '$alamat', '$tanggal_lahir', '$gender', '$usia')";

    mysqli_query($conn, $query);

    echo "<script>
            alert('Data berhasil ditambahkan!');
            window.location='index.php';
          </script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4">TAMBAH DATA MAHASISWA</h2>

        <!-- form -->
        <form method="POST">

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-select" required>
                    <option value="">-- Pilih Gender --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Usia</label>
                <input type="number" name="usia" class="form-control" required>
            </div>

            <button type="submit" name="simpan" class="btn btn-success">
                Simpan
            </button>

            <a href="index.php" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</body>

</html>