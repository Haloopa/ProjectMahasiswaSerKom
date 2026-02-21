<?php
include '../config/koneksi.php';

// data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$gender = $_POST['gender'];
$usia = $_POST['usia'];

// insery query
$query = "INSERT INTO mahasiswa 
          (nim, nama, alamat, tanggal_lahir, gender, usia)
          VALUES
          ('$nim', '$nama', '$alamat', '$tanggal_lahir', '$gender', '$usia')";

mysqli_query($conn, $query);

// redirect
header("Location: index.php");
exit;
?>