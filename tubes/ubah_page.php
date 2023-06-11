<?php 
require ('functions.php');

$id = $_GET['id'];
$p = query("SELECT * FROM tampilan WHERE id= $id");
// cek apakah tombol ubah sudah ditekan
if (isset($_POST['edit_page'])) {
    if (edit_page($_POST) > 0) {
      echo "<script>
              alert('data berhasil diubah');
              document.location.href = 'dashboard_page.php';
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
    <input type="hidden" name='id' value ="<?= $p['id']; ?>">
    <input type="hidden" name='gambarLama' value ="<?= $p['gambar']; ?>">
    <div class="mb-3">
    <label class="form-label">Gambar 
    <img src="<?=$d['gambar']; ?>" alt="" width="50">
    </label>
    <input type="file" class="form-control" name="gambar" autofocus require  >
  </div>
  <div class="mb-3">
    <label  class="form-label">Judul</label>
    <input type="text" class="form-control" name="judul" require value=<?=$p['judul']; ?> >
  </div>
  <div class="mb-3">
    <label  class="form-label">Deskripsi</label>
    <input type="text" class="form-control" name="isi" require value=<?=$p['isi']; ?>>
  </div>

  <div class="mb-3">
    <label  class="form-label">isi2</label>
    <input type="text" class="form-control" name="isi2" require value=<?=$p['isi2']; ?>>
  </div>
  <div class="mb-3">
    <label  class="form-label">isi3</label>
    <input type="text" class="form-control" name="isi3" require value=<?=$p['isi3']; ?>>
  </div>
  <div class="mb-3">
    <label  class="form-label">isi4</label>
    <input type="text" class="form-control" name="isi4" require value=<?=$p['isi4']; ?>>
  </div>



  <button type="submit" class="btn btn-primary" name="edit">ubah</button>
</form>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>