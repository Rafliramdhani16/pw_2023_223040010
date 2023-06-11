<?php 
session_start();
require ('navigasi.php');
require ('functions.php');

$user = query("SELECT * FROM user");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ngoding Skuy</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  </head>
  <body>
    <br>
    <br>
    <div class="container">
  <div class="table-responsive">
    <table border="1" cellpadding="10" cellspacing="0" class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">gambar</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <form action="" method="GET">
        <?php $i = 1; ?>
        <?php foreach ($user as $s) : ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><img src="asset/<?= $s['gambar']; ?>" alt="" width="70"></td>
            <td><?= $s['username']; ?></td>
            <td><?= $s['email']; ?></td>
            <td>
              <a href="ubah_user.php?id=<?= $s['id']; ?>" class="badge bg-warning text-decoration-none">Ubah</a>
              <a href="delete_user.php?id=<?= $s['id']; ?>" class="badge bg-danger text-decoration-none" onclick="return confirm('yakin dek')">Hapus</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
        <div class="cetak">
          <a href="cetak.php"  target="_blank" class="btn center-icon my-2">
              <div class="icon-container">
              <i class="fa-solid fa-file-pdf size-f"></i>
              </div>
          </a>
          </div>
        </form>
      </tbody>
    </table>
  </div>
</div>



</div>
<script src="https://kit.fontawesome.com/0cdc72137f.js" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>