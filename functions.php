<?php
//mengkoneksi ke database dan memilih database kita
function koneksi()
{

  return mysqli_connect('localhost', 'root', '', 'buku_tamu');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
