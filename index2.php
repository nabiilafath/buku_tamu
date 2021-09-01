<?php
//menghubungkan halaman index2 dengan halaman function
require 'functions.php';

// menampung ke tabel database
$tamu = query("SELECT * FROM tamu");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Visitor</title>
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