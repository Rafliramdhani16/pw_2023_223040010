<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location: login.php");
  exit;
}
require ('navigasi.php');
require ('functions.php');

$page = query("SELECT * FROM tampilan");


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
       <!-- banner -->
       <div class="jumbotron">
  <img src="asset/baner.jpg" class="img-fluid mt-5" alt="Banner">
</div>
    <!-- akhir banner -->

    <!-- Beranda -->
  <!-- sementara log out -->

    <div class="row justify-content-center">
    <div class="card mt-4 mb-3 m-3 card1 ">
  <div class="row no-gutters ">
  <div class="col-md-4 ">
      <img src="asset/7.webp" class="img-fluid rounded-start" alt="tesla">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Pengenalan Pemograman</h5>
        <p class="card-text"> pemrograman adalah proses membuat program di komputer. Pembuatan program ini bisa berupa website, software, aplikasi android, dan sebagainya.</p>
        <a href="pengenelan.php" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
    </div>
    </div>


    <!-- part2 -->
    <form action="" method="POST">
    <div class="row justify-content-center mt-3">
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
    <div class="row justify-content-center mt-3">
        <?php
        $count = 1; // Variabel hitungan
        foreach ($page as $p) :
            if ($count >= 4 && $count <= 6) { // Tampilkan query ke-4 hingga ke-6
                ?>
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <input type="hidden" name="id" value="<?=$p['id']; ?>">
                    <div class="card">
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
</form>


<!-- part3 -->

   <!-- akhir beranda -->
   <div class="text-center">
   <a href="detail.php" class="btn btn-primary mt-5">Lihat Semua Artikel</a>
   </div>

   <!-- bagian Referensi -->


   <div class="card mb-3 mt-5"  >
  <div class="row no-gutters ">
    <div class="col-md-4">
      <img src="asset/learn.webp" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title">Kalo Mau Mulai Darimana Ya?</h5>
        <p class="card-text mt-3">Kalian bisa belajar dimana dimana saja dan mencari referensi namun jika masih binggung kalian bisa melihat channel-channel youtube yang membahas tentang pemograman</p>
        <a href="#" class="btn btn-primary mt-2">lihat selengkapnya</a>
      </div>
    </div>
  </div>
</div>

<!-- akhir referensi -->
<!-- bagian populer -->

<h1 class="">Populer</h1>
<br>
<div class="row justify-content-center align-items-center">
<?php
        $count = 1; // Variabel hitungan
        foreach ($page as $p) :
            if ($count >= 7 && $count <= 10) { // Tampilkan query ke-4 hingga ke-6
                ?>
    <div class="col-md-5">
        <div class="card mt-4 mt-md-0 mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="asset/<?=$p['gambar']; ?>" class="card-img" alt="tesla" style="60">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?=$p['judul']; ?></h5>
                        <p class="card-text"><?=$p['isi']; ?></p>
                        <br>
                        <a href="isi_page.php?id=<?=$p['id']; ?>" class="btn btn-primary mt-3">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
            }
            $count++; // Increment hitungan
        endforeach;
        ?>
</div>




<!-- akhir populer -->
<!-- teraru -->
<br>
<h1 class="underline">Terbaru</h1>
<br>
<div class="row justify-content-center mt-3">
<?php
        $count = 1; // Variabel hitungan
        foreach ($page as $p) :
            if ($count >= 11 && $count <= 14) { 
                ?>
  <div class="col-sm-3 mb-3 mb-sm-0">
    <div class="card max-width: 500px;">
    
      <div class="card-body">
        <h5 class="card-title mt-2"><?=$p['judul']; ?></h5>
        <br>
        <p class="card-text"><?=$p['isi']; ?></p>
        <a href="isi_page.php?id=<?=$p['id']; ?>" class="btn btn-primary">selengkapnya</a>
      </div>
    </div>
  </div>
  <?php
            }
            $count++; // Increment hitungan
        endforeach;
        ?>
</div>
   <!-- footer -->
   <footer>
        <div class="container-3">
          <small>Copyright &copy; 2022 - Rafli Ramdhani</small>
        </div>
      </footer>
    
   <!-- akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
