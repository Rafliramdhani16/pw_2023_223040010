<?php 
require'../functions.php';
$keyword = query($detail);
$query = ("SELECT * FROM detail");

$detail = cari($_GET['keyword']);
?>

<?php $i=1;
foreach ($detail as $d) : ?>
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <input type="hidden" name="id" >
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

      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>