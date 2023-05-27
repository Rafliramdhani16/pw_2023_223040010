<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location: login.php");
  exit;
}
require ('navigasi.php');
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
  <a href="logout.php">Kalo gabut ya keluar</a>
    <div class="jarak">
    <div class="row justify-content-center">
    <div class="card mt-4 mb-3 m-3 card1 ">
  <div class="row no-gutters ">
  <div class="col-md-4 ">
      <img src="asset/1.webp" class="img-fluid rounded-start" alt="tesla">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Pengenalan Pemograman</h5>
        <p class="card-text"> pemrograman adalah proses membuat program di komputer. Pembuatan program ini bisa berupa website, software, aplikasi android, dan sebagainya.</p>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
    </div>
    </div>
    </div>

    <!-- part2 -->
    <div class="row justify-content-center mt-3">
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
<!-- part3 -->
<div class="row justify-content-center mt-3">
  <div class="col-sm-3 mb-3 mb-sm-0">
    <div class="card max-width: 540px;">
    
      <div class="card-body">
        <h5 class="card-title">Visual Studio Code</h5>
        <p class="card-text">sebuah editor kode sumber lintas platform yang dikembangkan oleh Microsoft. Ini merupakan salah satu perangkat lunak yang sangat populer di kalangan pengembang perangkat lunak dan digunakan untuk mengembangkan berbagai jenis aplikasi.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card max-width: 540px;">
    
      <div class="card-body">
        <h5 class="card-title">Frame Work</h5>
        <p class="card-text">suatu kerangka kerja abstrak yang menyediakan struktur, komponen, dan alat bantu untuk membangun dan mengembangkan aplikasi perangkat lunak.</p>
        <a href="#" class="btn btn-primary mt-5">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card max-width: 540px;">
    
      <div class="card-body">
        <h5 class="card-title">Data Base</h5>
        <p class="card-text">Database digunakan untuk menyimpan data dalam jumlah besar dengan cara yang efisien dan terorganisir, sehingga memungkinkan aplikasi untuk mengakses dan memanipulasi data dengan mudah.</p>
        <a href="#" class="btn btn-primary mt-4">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
   <!-- akhir beranda -->
   <div class="text-center">
   <a href="detail.php" class="btn btn-primary mt-5">Lihat Semua Artikel</a>
   </div>

   <!-- bagian Referensi -->
   <div class="jarak">
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
</div>
<!-- akhir referensi -->
<!-- bagian populer -->
<br>
<br>
<h1 class="underline">Populer</h1>
<br>
<div class="row justify-content-center align-items-center">
    <div class="card mt-4 mb-3 m-3" style="max-width: 35%; max-height:px 30%;">
  <div class="row no-gutters">
  <div class="col-md-4">
      <img src="asset/php.png" class="card-img" alt="tesla">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">PHP</h5>
        <p class="card-text">bahasa skrip dengan fungsi umum yang terutama digunakan untuk pengembangan web. Bahasa ini awalnya dibuat oleh seorang pemrogram Denmark-Kanada Rasmus Lerdorf pada tahun 1994.</p>
        <br>
        <a href="#" class="btn btn-primary mt-3">Selengkapnya</a>
      </div>
    </div>
  </div>
    </div>
   

<div class="card mt-4 mb-3 m-3" style="max-width: 35%; max-height:px 30%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="asset/js.png" class="card-img" alt="ai">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Java Script</h5>
        <p class="card-text">JavaScript adalah suatu bahasa pemrograman tingkat tinggi dan dinamis. JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Google Chrome,  Mozilla Firefox dll. Kode JavaScript dapat disisipkan dalam halaman web menggunakan tag script.</p>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
</div>
</div>
<div class="row justify-content-center align-items-center">
    <div class="card mt-4 mb-3 m-3" style="max-width: 35%; max-height:px 30%;">
  <div class="row no-gutters">
  <div class="col-md-4">
      <img src="asset/laravel.jpg" class="card-img" alt="tesla">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Laravel</h5>
        <p class="card-text">Laravel adalah kerangka kerja aplikasi web berbasis PHP yang sumber terbuka, menggunakan konsep Model-View-Controller. Laravel berada dibawah lisensi MIT, dengan menggunakan GitHub sebagai tempat berbagi kode.</p>
        <br>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
    </div>
   

<div class="card mt-4 mb-3 m-3" style="max-width: 35%; max-height:px 30%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="asset/Python.png" class="card-img" alt="ai">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Phyton</h5>
        <p class="card-text">Python adalah bahasa pemrograman tujuan umum yang ditafsirkan, tingkat tinggi. Dibuat oleh Guido van Rossum dan pertama kali dirilis pada tahun 1991, filosofi desain Python menekankan keterbacaan kode dengan penggunaan spasi putih yang signifikan.</p>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
</div>
</div>
<!-- akhir populer -->
<!-- teraru -->
<br>
<h1 class="underline">Terbaru</h1>
<br>
<div class="row justify-content-center mt-3">
  <div class="col-sm-3 mb-3 mb-sm-0">
    <div class="card max-width: 540px;">
    
      <div class="card-body">
        <h5 class="card-title mt-2"> Desain UI/UX</h5>
        <br>
        <p class="card-text">UI designer adalah orang yang mendesain tampilan antarmuka sebuah aplikasi atau perangkat. Secara teknis, antarmuka yang terdapat dalam UI designer berkaitan dengan grafis, tata letak, dan aspek desain fisik dari sebuah aplikasi. Sementara UX designer adalah orang yang mendesain pengalaman pengguna.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card max-width: 540px;">
    
      <div class="card-body">
        <h5 class="card-title mt-2">Web Developer</h5>
        <br>
        <p class="card-text">Web developer adalah role atau pekerjaan yang memiliki peran untuk membuat dan mengembangkan suatu aplikasi dan website. Jadi website dibuat benar-benar dari nol, nantinya website dikembangkan sesuai dengan kebutuhan suatu perusahaan.</p>
        <a href="#" class="btn btn-primary mt-5">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card max-width: 540px;">
    
      <div class="card-body">
        <h5 class="card-titl mt-2">Mobile Developer</h5>
        <br>
        <p class="card-text">Mengembangkan tampilan antarmuka aplikasi menggunakan bahasa pemrograman agar aplikasi mendukung segala macam smartphone. Merawat dan melakukan perubahan secara berkala agar fungsionalitas aplikasi terjaga.</p>
        <br>
        <a href="#" class="btn btn-primary mt-4">Go somewhere</a>
      </div>
    </div>
  </div>
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
