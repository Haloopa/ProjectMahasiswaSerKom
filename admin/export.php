<?php
include '../config/koneksi.php';

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_mahasiswa.xls");

// query
$query = "SELECT * FROM mahasiswa ORDER BY nim ASC";
$data = mysqli_query($conn, $query);

// template
echo "
<table border='1'>
<tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Tanggal Lahir</th>
    <th>Gender</th>
    <th>Usia</th>
</tr>
";

while($row = mysqli_fetch_assoc($data)) {
    echo "<tr>
            <td>{$row['nim']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['alamat']}</td>
            <td>{$row['tanggal_lahir']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['usia']}</td>
          </tr>";
}

echo "</table>";
?>