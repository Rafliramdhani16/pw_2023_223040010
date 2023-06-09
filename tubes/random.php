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
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah');
                document.location.href = 'profil.php';
            </script>";
    } else {
        echo "Data gagal diubah!";
    }
}
?>

<section class="padding-y bg-light" style="height: 100vh;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profil</li>
            </ol>
        </nav>

        <div class="row">
            <aside class="col-lg-3 col-xl-3">
                <nav class="nav flex-lg-column nav-pills mb-4 d-sm-none d-lg-block">
                    <a class="nav-link active" href="#">Profil</a>
                    <a class="nav-link" href="logout.php">Keluar</a>
                </nav>
            </aside>
            <main class="col-lg-9">
                <article class="card">
                    <div class="card-body">
                        <form action="" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="id" value="<?= $user['id']; ?>">
                            <input type="hidden" name="gambarLama" value="<?= $user['gambar']; ?>">
                            <div class="row">
                                <aside class="col-lg-4">
                                    <figure class="text-lg-center">
                                        <h6 class="mt-3">Foto</h6>
                                        <img class="img-lg img-avatar mt-3" src="img/<?= $user['gambar']; ?>" alt="User Photo">
                                        <img src="" class="flex mx-auto img-lg img-avatar mt-2" id="img-preview" style="display: none;" alt="User Photo">
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
                                    <button type="submit" name="ubah" class="btn btn-success-light mt-2">Simpan Perubahan</button>
                                </div> 
                            </div>
                        </form>
                    </div> 
                </article> 
            </main>
        </div
