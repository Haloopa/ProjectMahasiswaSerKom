<?php
include '../config/koneksi.php';

// update query
if (isset($_POST['nim'])) {

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $gender = $_POST['gender'];
    $usia = $_POST['usia'];

    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                alamat = '$alamat',
                tanggal_lahir = '$tanggal_lahir',
                gender = '$gender',
                usia = '$usia'
              WHERE nim = '$nim'";

    mysqli_query($conn, $query);
}

// redirect
header("Location: index.php");
exit;
?>