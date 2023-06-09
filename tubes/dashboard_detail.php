<?php 

session_start();


require('navigasi.php');
require('functions.php');



$detail=query("SELECT * FROM detail NATURAL JOIN kategori");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <section class="padding-y bg-light" style="height: 100%;">
    <br>
    <br>
    <br>
    <form action="" method="POST">


    <?php $i=1;
    foreach ($detail as $d) : ?>
<div class="card mb-3 card-detail">
  <div class="row g-0">
    <div class="col-md-4">
      <input type="hidden" name="id_detail" >
      <img src="asset/<?=$d['gambar']; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <a href="isi_detail.php?id=<?=$d['id']; ?>" class="btn"><?=$d['judul']; ?></a>
        <div>
        <li>
          <?=$d['kategori']; ?>
          </li>
          <span class="card-text"><small class="text-body-secondary"><?=$d['waktu']; ?></small></span>
          </div>
        <p class="card-text"><?=$d['isi']; ?></p>
        <a href="delete_detail.php?id=<?=$d['id']; ?>" onclick="return confirm (apakah anda yakin?);">hapus</a>
        <a href="edit_detail.php?id=<?=$d['id']; ?>" onclick="return confirm (apakah anda yakin ubah?);">Ubah</a>
        <br>

      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<br>
<div style="text-align: center;">
  <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
</div>
<br>
    </form>
    </section>
<!-- tes -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>