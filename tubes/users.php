<?php 
require ('dashboard_admin.php');
require ('functions.php');

$user = query("SELECT * FROM user");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ngoding Skuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
<a href="tambah.php" class="btn btn-primary text-decoration-none">Tambah Data Mahasiswa</a>
<div class=" container tbl">
<table class="table">
  <thead class="">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php
    foreach ($user as $s) : ?>
      <tr>
        <th scope="row"><?= $i; ?></th>
        <td><?= $s['username']; ?></td>
        <td><?=$s['email']; ?></td>
        <td>
          <a href="ubah.php?id=<?=$s['id']; ?>" class="badge text-bg-warning text-decoration-none">Ubah</a> |
          <a href="hapus.php?id=<?=$s['id']; ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('yakin dek')">Hapus</a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>


</div>
<script src="https://kit.fontawesome.com/0cdc72137f.js" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>