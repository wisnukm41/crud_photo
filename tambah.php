<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Menu</title>
</head>

<body>
  <h1>Tambah Data Menu</h1>
  <form action="./do_tambah.php" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Nama Menu</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><input type="number" name="harga"></td>
      </tr>
      <tr>
        <td>Deskripsi</td>
        <td>
          <textarea name="deskripsi" cols="30" rows="10"></textarea>
        </td>
      </tr>
      <tr>
        <td>Gambar</td>
        <td><input type="file" name="gambar"></td>
      </tr>
    </table>
    <input type="submit" value="SIMPAN">
  </form>
</body>

</html>