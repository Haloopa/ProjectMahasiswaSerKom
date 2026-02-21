<?php
include '../config/koneksi.php';
include '../layout/header.php';


// checking
if (!isset($_GET['nim'])) {
    header("Location: index.php");
    exit;
}

$nim = $_GET['nim'];

// ambil data mhs by nim
$query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">EDIT DATA MAHASISWA</h2>

        <!-- form -->
        <form method="POST" action="update.php">
            <input type="hidden" name="nim" value="<?= $row['nim'] ?>">

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" class="form-control" value="<?= $row['nim'] ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" value="<?= $row['nama'] ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" required><?= $row['alamat'] ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" value="<?= $row['tanggal_lahir'] ?>" class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-select" required>
                    <option value="Laki-laki" <?= $row['gender'] == "Laki-laki" ? "selected" : "" ?>>
                        Laki-laki
                    </option>
                    <option value="Perempuan" <?= $row['gender'] == "Perempuan" ? "selected" : "" ?>>
                        Perempuan
                    </option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Usia</label>
                <input type="number" name="usia" value="<?= $row['usia'] ?>" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-warning">
                Update
            </button>

            <a href="index.php" class="btn btn-secondary">
                Kembali
            </a>

        </form>
    </div>

</body>

</html>