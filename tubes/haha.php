<?php 
require ('functions.php');
require ('navigasi.php');


?>

<?php $i=1;
foreach ($deskripsi as $d) : ?>
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="asset/<?=$d['gambar']; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <a href="isi.php?id=<?=$d['id']; ?>" class="btn"><?=$d['judul']; ?></a>
        <div>
        <li>
          <?=$d['list']; ?>
          </li>
          <span class="card-text"><small class="text-body-secondary"><?=$d['waktu']; ?></small></span>
          </div>
        <p class="card-text"><?=$d['isi']; ?></p>
        <br>
        <a href="delete.php?id=<?=$d['id']; ?>" onclick="return confirm (apakah anda yakin?);">hapus</a>
        <a href="edit.php?id=<?=$d['id']; ?>" onclick="return confirm (apakah anda yakin ubah?);">Ubah</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>