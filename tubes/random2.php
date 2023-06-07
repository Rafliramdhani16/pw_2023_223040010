<?php 
require ('functions.php');
require ('navigasi.php');


?>




<form action="" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">Gambar </label>
    <input type="file" class="form-control" name="gambar" autofocus require>
  </div>
  <div class="mb-3">
    <label  class="form-label">Judul</label>
    <input type="text" class="form-control" name="judul" require>
  </div>
  <div class="mb-3">
  <label  class="form-label">kategori</label>
    <select class="form-select" name="kategori" id="kategori" aria-label="Floating label select example">
  
      <option selected>pilih kategori</option>
      <?php foreach ($kategori as $k): ?>
      <option value="<?=$k['id_kategori']; ?>"><?=$k['kategori']; ?></option>
     
      <?php endforeach; ?>
    </select>

  </div>
  <div class="mb-3">
    <label  class="form-label">Waktu</label>
    <input type="text" class="form-control" name="waktu" >
  </div>

  <div class="mb-3">
    <label  class="form-label">isi</label>
    <input type="text" class="form-control" name="isi" require>
  </div>


  <button type="submit" class="btn btn-primary" name="tambah">Gaskeun</button>
</form>