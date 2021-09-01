<?php
//mengkoneksi ke database dan memilih database kita
$conn = mysqli_connect('localhost', 'root', '', 'buku_tamu');

//isi dengan tabel yang di database

$result = mysqli_query($conn, "SELECT * FROM tamu");


//mengubah data ke array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;

  // menampung ke tabel database
  $tamu = $rows;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar pengunjung</title>
</head>

<body>
  <h3>Daftar Pengunjung Perpustakaan</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <!-- tr = tabel row
      th = tabel head
      td = tabel data -->
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Pordi</th>
      <th>Asrama</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($tamu as $tm) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $tm['NIM']; ?></td>
        <td><?= $tm['nama']; ?></td>
        <td><?= $tm['Asrama']; ?></td>
        <td><?= $tm['Prodi']; ?></td>
        <td>
          <a href="">Update</a>
          <a href="">Delete</a>
        </td>
      </tr>
    <?php endforeach ?>
  </table>
</body>

</html>