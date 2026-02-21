<?php
include 'config/koneksi.php';
Include 'layout/header.php';

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


// Statistik keseluruhan mahasiswa
$total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM mahasiswa"))['total'];

// Statistik total perempuan
$total_perempuan = mysqli_fetch_assoc(mysqli_query($conn, 
    "SELECT COUNT(*) as total FROM mahasiswa WHERE gender='Perempuan'"))['total'];

// Statistik total laki-laki
$total_laki = mysqli_fetch_assoc(mysqli_query($conn, 
    "SELECT COUNT(*) as total FROM mahasiswa WHERE gender='Laki-laki'"))['total'];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Home - Data Mahasiswa</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <h2 class="text-center mb-4">DATA MAHASISWA</h2>
        <!-- Statistik -->
        <div class="row text-center mb-4">
            <div class="col-md-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5>Total Mahasiswa</h5>
                        <h3><?= $total ?></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5>Perempuan</h5>
                        <h3><?= $total_perempuan ?></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5>Laki-laki</h5>
                        <h3><?= $total_laki ?></h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search -->
        <form method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari nama mahasiswa..."
                    value="<?= $search ?>">
                <button class="btn btn-primary">Cari</button>
            </div>
        </form>

        <!-- Data -->
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
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</body>

</html>