<?php
require('./koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['old_gambar'];

if ($_FILES['gambar']['type'] != '') {
  $gambar = "gambar-" . rand() . $_FILES['gambar']['name'];
  $file_tmp = $_FILES['gambar']['tmp_name'];
  move_uploaded_file($file_tmp, './img/' . $gambar);

  unlink("./img/" . $_POST['old_gambar']);
}

$query = "UPDATE menu SET nama='$nama', harga='$harga' , deskripsi='$deskripsi', gambar='$gambar' WHERE id='$id'";

$mysql->query($query);

header('location: index.php');
