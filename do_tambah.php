<?php
require('koneksi.php');

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$gambar = "gambar-" . rand() . $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'];
move_uploaded_file($file_tmp, './img/' . $gambar);

$query = "INSERT INTO menu VALUES('','$nama','$deskripsi','$harga','$gambar')";
$mysql->query($query);

header('Location: index.php');
