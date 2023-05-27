<?php 
require('navigasi.php');
require('functions.php');

$halaman=7;


$detail=query("SELECT * FROM detail")
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
    <br>
    <br>
    <br>
    <div class="bg">
    <div class="row justify-content-center mt-3 coverwarna">
  <div class="col-sm-3 mb-3 mb-sm-0">
    <div class="card max-width: 540px;">
    <img src="asset/html.webp" class="card-img" alt="tesla">
      <div class="card-body">
        <h5 class="card-title">HTML</h5>
        <p class="card-text">Hypertext Markup Language adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. dan dapat di padukan dengan CSS atau bahasa pemograman juga</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card max-width: 540px;">
    <img src="asset/2.webp" class="card-img" alt="tesla">
      <div class="card-body">
        <h5 class="card-title">CSS</h5>
        <p class="card-text">Cascading Style Sheet merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemrograman.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card max-width: 540px;">
    <img src="asset/3.webp" class="card-img" alt="tesla">
      <div class="card-body">
        <h5 class="card-title">Bahasa Pemograman</h5>
        <p class="card-text">Bahasa pemrograman merupakan serangkaian kata yang diwujudkan dalam sebuah instruksi atau perintah dan terdiri dari banyak baris yang bisa dimengerti oleh komputer. </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
   </div>
<!-- akhir cover -->
<h1 class="underline mt-5">Recent</h1>
<br>
<br>
<?php foreach ($detail as $d) : ?>
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="asset/<?=$d['gambar']; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <a href="" class="btn"><?=$d['judul']; ?></a>
        <div>
        <li>
          <?=$d['list']; ?>
          </li>
          <span class="card-text"><small class="text-body-secondary"><?=$d['waktu']; ?></small></span>
          </div>
        <p class="card-text"><?=$d['isi']; ?></p>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>