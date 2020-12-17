<?php
require('koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM menu WHERE id='$id'";
$data = $mysql->query($query)->fetch_object();

unlink("./img/" . $data->gambar);

$query = "DELETE FROM menu WHERE id='$id'";
$mysql->query($query);

header('location: index.php');
