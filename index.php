<?php
require('koneksi.php');
$query = 'SELECT * FROM menu';
$data = $mysql->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Restoran</title>
</head>

<body>
  <h1>Menu Restoran</h1>
  <a href="./tambah.php">Tambah Data</a>
  <table border="1">
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>Harga</td>
      <td>Foto</td>
      <td>Deskripsi</td>
      <td>Aksi</td>
    </tr>
    <?php
    $no = 1;
    while ($row = $data->fetch_object()) :
    ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $row->nama ?></td>
        <td>Rp. <?= $row->harga ?></td>
        <td><img src="./img/<?= $row->gambar ?>" alt="Gambar <?= $row->nama ?>" width="300px"></td>
        <td><?= $row->deskripsi ?></td>
        <td>
          <a href="./ubah.php?id=<?= $row->id ?>">Ubah</a> ||
          <a href="./delete.php?id=<?= $row->id ?>">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>