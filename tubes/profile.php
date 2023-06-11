<?php 
require ('navigasi.php');
require ('functions.php');

$user= query("SELECT * FROM user");
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
    <br>

<section class="padding-y bg-light mt-2">
<div class="container">
    <nav aria-label="breadcrumb">
<a href="index.php" class="btn">Kembali</a>
    </nav>
    <div class="row">
    <aside class="col-lg-3 col-xl-3">
        <!--  COMPONENT MENU LIST  -->
    <nav class="nav flex-lg-column nav-pills mb-4 d-sm-none d-lg-block ">
            <a class="nav-link active" href="#">Profil</a>
       <a class="nav-link" href="logout.php">Keluar</a>
       </nav>
    </aside>

    <main class="col-lg-9">
            <article class="card">
            <div class="col-lg-12  mb-3">
            <form action="" enctype="multipart/form-data" method="POST">
    <label class="form-label">Username</label>
    <input class="form-control" name="username" id="username" type="text" value="<?= $user['username']; ?>" maxlength="25">
        </div> <!-- col .// -->
    <div class="col-lg-12  mb-3">
        <label class="form-label">Email</label>
        <input class="form-control" name="email" id="email" type="text" value="<?= $user['email']; ?>">
    </div> <!-- col .// -->
    <div class="col-lg-12  mb-3">
    <label class="form-label">Level</label>
    <input class="form-control" name="level" id="level" type="text" value="<?= $user['nama_level']; ?>" disabled>
    </div> <!-- col .// -->


    <button type="submit" name="ubah" class="btn btn-success-light mt-2">Simpan Perubahan</button>
    <aside class="col-lg-4">
    <figure class="text-lg-center ">
        <h6 class="mt-3">Foto</h6>
        <img class="img-lg img-avatar mt-3" src="./img/<?= $user['gambar']; ?>" alt="User Photo">
        <img src="" class=" flex mx-auto img-lg img-avatar mt-2" id="img-preview" style="display: none;" alt="User Photo">
        <br>
        <input type="file" class="form-control mt-2" name="gambar" id="gambar" onchange="previewImage();">
    </figure>
    </aside> <!-- col.// -->

    </form>
            </article>
    </main>
    </div> <!-- row   -->
</div>  <!--  container     -->
</section>
</body>
</html>