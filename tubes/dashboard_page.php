<?php 
require('navigasi.php');
require ('functions.php');
$p=query("SELECT * FROM tampilan");
$p2 = query("SELECT * FROM tampilan2");
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
            <td>
              <a href="ubah.php?id=<?= $s['id']; ?>" class="badge bg-warning text-decoration-none">Ubah</a>
              <a href="hapus.php?id=<?= $s['id']; ?>" class="badge bg-danger text-decoration-none" onclick="return confirm('yakin dek')">Hapus</a>
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
<div class="container">
    <h3>tampilan2</h3>
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($p2 as $p2) : ?>
          <tr>
            <th scope="row"><?=$i; ?></th>
            <td><img src="asset/<?=$p2['gambar']; ?>" alt="Gambar 1" width="100"></td>
            <td><?=$p2['judul']; ?></td>
            <td><?=$p2['isi']; ?></td>
            <td>
              <a href="ubah.php?id=<?= $s['id']; ?>" class="badge bg-warning text-decoration-none">Ubah</a>
              <a href="hapus.php?id=<?= $s['id']; ?>" class="badge bg-danger text-decoration-none" onclick="return confirm('yakin dek')">Hapus</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>