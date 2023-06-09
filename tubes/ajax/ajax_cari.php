<?php 
require'../functions.php';
$detail = cari($_GET['keyword']);
?>


<?php if($detail):
   ?>
<?php  
foreach ($detail as $d) : ?>
      <div class="card mb-3 card-detail">
        <div class="row g-0">
          <div class="col-md-4">
            <input type="hidden" name="id">
            <img src="asset/<?=$d['gambar']; ?>" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
            <a href="isi_detail.php?id=<?=$d['id']; ?>" class="btn link-color"><?=$d['judul']; ?></a>
              <div>
                <li>
                  <?=$d['kategori']; ?>
                  <span class="card-text mx-1"><small class="text-body-secondary"><?=$d['waktu']; ?></small></span>
                </li>
              </div>
              <p class="card-text"><?=$d['isi']; ?></p>
              <br>
            </div>
          </div>
        </div>
      </div>
<?php endforeach; ?>
<?php 
else : 
?>
<div class="row">
  <div class="col-md-6">
  <div class="alert alert-danger" role="alert">
  Data tidak ditemukan
</div>
  </div>
</div>
<?php endif; ?>