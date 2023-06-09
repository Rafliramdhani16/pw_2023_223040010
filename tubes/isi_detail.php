<?php 
session_start();
require ('functions.php');
require ('navigasi.php');
$id=$_GET['id'];
$d=query("SELECT * FROM detail WHERE id='$id'");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengenalan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body class=" bg-light">
    <br>
    <main class="col-lg-9 mt-4 mx-auto">
        <article class="card">
            <section class="padding-y" style="height: 200vh;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center my-5"> <!-- Menggunakan class "text-left" -->
                                <img src="asset/<?=$d['gambar']; ?>" class="img-fluid border" alt="Gambar" style="width: 60%;">
                            </div>
                            <h1 class="text mx-5 mt-4"><?=$d['judul']; ?></h1>
                            <p  class="text-justify mb-3 mt-5 mx-5"><?=$d['isi']; ?></p> <!-- Menggunakan class "text-left" -->
                            <p class="text-justify mb-5 mx-5"></p> <!-- Menggunakan class "text-right" -->
                            <div class="clearfix"></div> <!-- Menggunakan class "clearfix" -->
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-7">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, optio laudantium. Iste voluptatibus vitae iure asperiores facere ex a et dicta quo illo. Incidunt temporibus maiores blanditiis optio hic? Provident eos placeat tempora saepe corporis ullam eaque voluptatem veniam a. Facere commodi facilis ullam, cumque excepturi iusto atque? Optio, quam?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
</body>
</html>
