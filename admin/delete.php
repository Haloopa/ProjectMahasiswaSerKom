<?php
include '../config/koneksi.php';


// cek data by nim
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    // hapus data
    $query = "DELETE FROM mahasiswa WHERE nim = '$nim'";
    mysqli_query($conn, $query);
}

// redirect
header("Location: index.php");
exit;
?>