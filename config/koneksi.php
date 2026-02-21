<!-- koneksi database -->
<?php
$conn = mysqli_connect("localhost", "root", "", "mahasiswa_db");

if (!$conn) {
    die("Koneksi Gagagl: " . mysqli_connect_error());
}

?>