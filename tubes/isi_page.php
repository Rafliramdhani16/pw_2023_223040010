<?php 
require 'functions.php';
require 'navigasi.php';

$id=$_GET['id'];
$p=query("SELECT * FROM tampilan WHERE id='$id'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


  <div class="jumbotron d-flex justify-content-center mt-5">
  <img src="asset/<?=$p['gambar']; ?>" class="img-fluid" style="width:60%;" alt="pengenalan Pemograman">
</div>
    <div class="col-md-8">
      <div class="card-body">
      <p class="card-text" style="width: 80%;"><?=$p['judul']; ?></p>

        <p class="card-text" style="width: 80%"><?=$p['isi']; ?></p>
        <br>

      </div>
    </div>

</div>
</body>
</html>