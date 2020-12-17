<?php
require('koneksi.php');
$id = $_GET['id'];
$query = "SELECT * FROM menu WHERE id='$id'";
$data = $mysql->query($query)->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Menu</title>
</head>

<body>
  <h1>Ubah Data Menu</h1>
  <form action="./do_ubah.php" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Nama Menu</td>
        <td><input type="text" name="nama" value="<?= $data->nama ?>""></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><input type=" number" name="harga" value="<?= $data->harga ?>"></td>
      </tr>
      <tr>
        <td>Deskripsi</td>
        <td>
          <textarea name="deskripsi" cols="30" rows="10"><?= "$data->deskripsi" ?></textarea>
        </td>
      </tr>
      <tr>
        <td>Gambar</td>
        <td><input type="file" name="gambar"></td>
      </tr>
    </table>
    <input type="hidden" name="id" value="<?= $data->id ?>">
    <input type="hidden" name="old_gambar" value="<?= $data->gambar ?>">
    <input type="submit" value="SIMPAN">
  </form>
</body>

</html>