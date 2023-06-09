<?php require 'functions.php';

// jika tidak ada id url
if (!isset($_GET['id'])) {
  header("Location: dashboard_user.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query user berdasarkan id
$m = query("SELECT * FROM user WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['edit_user'])) {
  if (edit_user($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah');
            document.location.href = 'dashboard_user.php';
          </script>";
  } else {
    echo "Data gagal diubah!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Ubah Data Mahasiswa</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h3 class="mt-3">Form Ubah Data Mahasiswa</h3>
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $m['id']; ?>">
      <div class="form-group">
        <label for="gambar">Gambar:</label>
        <input type="file" class="form-control" id="gambar" name="gambar" required value="<?= $m['gambar']; ?>">
      </div>
      <div class="form-group">
        <label for="username">Nama:</label>
        <input type="text" class="form-control" id="username" name="username" autofocus required value="<?= $m['username']; ?>">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" required value="<?= $m['email']; ?>">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required value="<?= $m['password']; ?>">
      </div>
      <button type="submit" class="btn btn-primary" name="edit_user">Ubah Data</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
