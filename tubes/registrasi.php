<?php 
require ('functions.php');

if(isset($_POST['registrasi'])){
  if(registrasi($_POST) > 0){
    echo "<script>
      alert('user baru berhasil ditambahkan ');
      document.location.href = 'login.php';
      </script>";
  } else {
    echo"<script>
    alert('user gagal ditambahkan ');
    document.location.href = 'registrasi.php';
    </script>";
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
  <body>
    
  <div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h1 class="card-title text-center">Registrasi</h1>
            <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="gambar" name="gambar">
            <input type="hidden" id="id_role" name="id_role" value="2">
            <div class="mb-3">
    <label for="exampleInputUsername1" class="form-label">Username</label>
    <input type="Text" name="username" autofocus autocomplete="off" class="form-control" id="exampleInputUsername" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password1" class="form-control" id="exampleInputPassword1"  required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" name="password2" class="form-control" id="exampleInputPassword1" required>
  </div>
  <span>
  <button type="submit" name="registrasi"class="btn btn-primary">Submit</button>
  <a href="login.php" class="btn btn-primary">Masuk</a>
  </span>
</form>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
