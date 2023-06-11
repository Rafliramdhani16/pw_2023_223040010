<?php 
session_start();
// logika ketika kita sudah masuk login dan kita tidak double login
if(isset($_SESSION['login']))
{
  header("Location: index.php");
  exit;
}

require 'functions.php';
// ketika tombol ditekan
if(isset($_POST['login'])){
  $login = login($_POST);
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
            <h1 class="card-title text-center">LOGIN</h1>
            <form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputUsername1" class="form-label">Username</label>
    <input type="Text" name="username"   autofocus autocomplete="off" class="form-control" id="exampleInputUsername">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Ingat</label>
    <a href="registrasi.php" style="margin-left:20px;">Registrasi </a>
  </div>
<?php if(isset($login['error'])):  ?>
<p><?=$login['pesan']; ?></p>
<?php endif; ?>
  <button type="submit" name="login" class="btn btn-primary">Masuk</button>
  <div>
  </div>
</form>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>