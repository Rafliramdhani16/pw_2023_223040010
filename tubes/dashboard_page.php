<?php 
session_start();
require('navigasi.php');
require ('functions.php');
$p=query("SELECT * FROM tampilan");
?>
<br>
<br>
<div class="container">
    <h3>Tampilan1</h3>
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">isi1</th>
            <th scope="col">isi2</th>
            <th scope="col">isi4</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($p as $p) : ?>
          <tr>
            <th scope="row"><?=$i; ?></th>
            
            <td><img src="asset/<?=$p['gambar']; ?>" alt="Gambar 1" width="100"></td>
            <td><?=$p['judul']; ?></td>
            <td><?=$p['isi']; ?></td>
            <td><?=$p['isi2']; ?></td>
            <td><?=$p['isi3']; ?></td>
            <td><?=$p['isi4']; ?></td>
            <td>
              <a href="ubah_page.php?id=<?= $p['id']; ?>" class="badge bg-warning text-decoration-none">Ubah</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<br>
<br>
<!-- baggian 2 -->
