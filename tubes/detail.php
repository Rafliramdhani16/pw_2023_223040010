<?php 
session_start();
require('navigasi.php');
require('functions.php');

$detail=query("SELECT * FROM detail NATURAL JOIN kategori");
$page = query("SELECT * FROM tampilan ");
$kategori = query("SELECT * FROM kategori");

if(isset($_POST['cari'])){
  $detail = cari ($_POST['keyword']);
}


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
  <body class="overflow-x-hidden">
  <div class="bg hide-on-mobile">
    <div class="row justify-content-center mt-3 hide-on-mobile">
        <?php
        $count = 1; // Variabel hitungan
        foreach ($page as $p) :
            if ($count <= 3) { // Hanya tampilkan 3 query pertama
                ?>
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <input type="hidden" name="id" value="<?=$p['id']; ?>">
                    <div class="card">
                        <img src="asset/<?=$p['gambar']; ?>" class="card-img" alt="tesla">
                        <div class="card-body">
                            <h5 class="card-title"><?=$p['judul']; ?></h5>
                            <p class="card-text"><?=$p['isi']; ?></p>
                            <a href="isi_page.php?id=<?=$p['id']; ?>" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            $count++; // Increment hitungan
        endforeach;
        ?>
    </div>
</div>

   <!-- akhir cover -->
   <p class="p1">Recent</p>

   <div class="row">
  <div class="col-md-6">
    <form action="" method="GET">
      <div class="input-group mb-3 my-3">
        <select class="form-select col-md-4" name="kategori" id="kategori" aria-label="Floating label select example">
          <option selected>pilih kategori</option>
          <?php foreach ($kategori as $k): ?>
          <option value="<?=$k['id_kategori']; ?>"><?=$k['kategori']; ?></option>
          <?php endforeach; ?>
        </select>
        <input type="search" class="form-control col-md-8" placeholder="Cari..." aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" id="keyword" autofocus autocomplete="off">
        <button class="btn btn-primary" type="submit" name="cari" id="search-button">Button</button>
      </div>
    </form>
  </div>
</div>




<div id="search-container">
    <?php foreach ($detail as $d) : ?>
      <div class="card mb-3 card-detail">
        <div class="row g-0">
          <div class="col-md-4">
            <input type="hidden" name="id">
            <img src="asset/<?=$d['gambar']; ?>" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
            <a href="isi_detail.php?id=<?=$d['id']; ?>" class="btn link-color"><?=$d['judul']; ?></a>
              <div>
                <li>
                  <?=$d['kategori']; ?>
                  <span class="card-text mx-1"><small class="text-body-secondary"><?=$d['waktu']; ?></small></span>
                </li>
              </div>
              <p class="card-text"><?=$d['isi']; ?></p>
              <br>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
  </body>
</html>