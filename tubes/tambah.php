<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'detail.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
$kategori = query("SELECT * FROM kategori");


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="global-container">
      <div class="login-form">
  <form action="" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">Gambar </label>
    <input type="file" class="form-control" name="gambar" autofocus require>
  </div>
  <div class="mb-3">
    <label  class="form-label">Judul</label>
    <input type="text" class="form-control" name="judul" require>
  </div>
  <div class="mb-3">
  <label  class="form-label">kategori</label>
    <select class="form-select" name="kategori" id="kategori" aria-label="Floating label select example">
  
      <option selected>pilih kategori</option>
      <?php foreach ($kategori as $k): ?>
      <option value="<?=$k['id_kategori']; ?>"><?=$k['kategori']; ?></option>
     
      <?php endforeach; ?>
    </select>

  </div>
  <div class="mb-3">
    <label  class="form-label">Waktu</label>
    <input type="text" class="form-control" name="waktu" >
  </div>

  <div class="mb-3">
    <label  class="form-label">isi</label>
    <input type="text" class="form-control" name="isi" require>
  </div>


  <button type="submit" class="btn btn-primary" name="tambah">Gaskeun</button>
</form>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>