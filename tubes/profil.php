<?php 
session_start();
require('navigasi.php');
require('functions.php');

// Logika ketika kita sudah masuk login dan kita tidak double login
if (!isset($_SESSION['login'])) {
    header("Location: profil.php");
    exit;
}

$id = $_SESSION['id'];
$user = query("SELECT * FROM user WHERE id='$id'");

// Cek tombol
if (isset($_POST['edit_user'])) {
    if (edit_user($_POST) > 0) {
      echo "<script>
              alert('Data berhasil diubah');
              document.location.href = 'profil.php';
            </script>";
    } else {
      echo "Data gagal diubah!";
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="overflow-y-hidden">
    
<section class="padding-y bg-light" style="height: 100vh;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profil</li>
            </ol>
        </nav>
        <div class="row">
            <aside class="col-lg-3 col-xl-2 mt-3">
                <nav class="nav flex-lg-column nav-pills mb-4 d-sm-none d-lg-block">
                    <a class="nav-link active  my-2 mx-2" href="#">Profil</a>
                    <a class="nav-link" href="logout.php">Log out</a>
                </nav>
            </aside>

            <main class="col-lg-9 mt-4">
                <article class="card">
                    <div class="card-body">
                        <form action="" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="id" value="<?= $user['id']; ?>">
                            <input type="hidden" name="gambarLama" value="<?= $user['gambar']; ?>">
                            <input type="hidden" name="password" value="<?= $user['password']; ?>">
                            <div class="row">
                                <aside class="col-lg-4">
                                    <figure class="text-lg-center">
                                        <h6 class="mt-3">Foto</h6>
                                        <?php if ($user['gambar']) { ?>
                                            <img class="img-lg img-avatar mt-3" src="asset/<?php echo $user['gambar']; ?>" alt="User Photo" width="120">
                                        <?php } else { ?>
                                            <img class="img-lg img-avatar mt-3" src="img/default.png" alt="User Photo" width="120">
                                        <?php } ?>
                                        <br>
                                        <input type="file" class="form-control mt-2" name="gambar" id="gambar" onchange="previewImage();">
                                    </figure>
                                </aside>
                                <div class="col-lg-8">
                                    <div class="row gx-3">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Username</label>
                                            <input class="form-control" name="username" id="username" type="text" value="<?= $user['username']; ?>">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" name="email" id="email" type="text" value="<?= $user['email']; ?>">
                                        </div>
                                    </div>
                                    <button type="submit" name="edit_user" class="btn btn-primary mt-2">Simpan Perubahan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>
            </main>
        </div>
    </div>
</section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>