<?php
include '../config/koneksi.php';
include '../layout/header.php';

// search
$search = isset($_GET['search']) ? $_GET['search'] : "";

// sorting
$order = "ASC";
if (isset($_GET['sort']) && $_GET['sort'] == "desc") {
    $order = "DESC";
}

$query = "SELECT * FROM mahasiswa 
          WHERE nama LIKE '%$search%' 
          ORDER BY nim $order";

$data = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin - Data Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4">ADMIN DATA MAHASISWA</h2>

        <div class="d-flex justify-content-between mb-3">
            <a href="tambah.php" class="btn btn-primary">+ Tambah Mahasiswa</a>
            <a href="../index.php" class="btn btn-secondary">← Kembali ke Home</a>
        </div>

        <!-- search -->
        <form method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari nama mahasiswa..."
                    value="<?= $search ?>">
                <button class="btn btn-primary">Cari</button>
            </div>
        </form>

        <!-- data -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>
                        NIM
                        <a href="?sort=asc" class="text-white text-decoration-none">▲</a>
                        <a href="?sort=desc" class="text-white text-decoration-none">▼</a>
                    </th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Gender</th>
                    <th>Usia</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php while($row = mysqli_fetch_assoc($data)) { ?>
                <tr>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['tanggal_lahir'] ?></td>
                    <td><?= $row['gender'] ?></td>
                    <td><?= $row['usia'] ?></td>
                    <td>
                        <a href="edit.php?nim=<?= $row['nim'] ?>" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="delete.php?nim=<?= $row['nim'] ?>" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Delete
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div>
            <a href="export.php" class="btn btn-success">
                Export Excel
            </a>
        </div>
    </div>
</body>

</html>