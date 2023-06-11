<?php
require 'functions.php';

// jika tidak ada id url
if(!isset($_GET['id'])){
  header("Location: detail.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$d = query("SELECT * FROM detail NATURAL JOIN kategori WHERE id= $id");
$kategori = query("SELECT * FROM kategori NATURAL JOIN detail WHERE id_kategori");



// cek apakah tombol ubah sudah ditekan
if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'detail.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}
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
    <input type="hidden" name='id' value ="<?= $d['id']; ?>">
    <input type="hidden" name='gambarLama' value ="<?= $d['gambar']; ?>">
    <div class="mb-3">
    <label class="form-label">Gambar 
    <img src="<?=$d['gambar']; ?>" alt="" width="50">
    </label>
    <input type="file" class="form-control" name="gambar" autofocus require  >
  </div>
  <div class="mb-3">
    <label  class="form-label">Judul</label>
    <input type="text" class="form-control" name="judul" require value=<?=$d['judul']; ?> >
  </div>
  <div class="mb-3">
  <label  class="form-label">kategori</label>
    <select class="form-select" name="kategori" id="kategori" aria-label="Floating label select example">
      <option selected disabled>pilih kategori</option>
      <?php foreach ($kategori as $k): ?>
      <option value="<?=$k['id_kategori']; ?>"><?=$k['kategori']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="mb-3">
    <label  class="form-label">Waktu</label>
    <input type="text" class="form-control" name="waktu" value=<?=$d['waktu']; ?>>
  </div>

  <div class="mb-3">
    <label  class="form-label">isi</label>
    <input type="text" class="form-control" name="isi" require value=<?=$d['isi']; ?>>
  </div>



  <button type="submit" class="btn btn-primary" name="edit">ubah</button>
</form>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>