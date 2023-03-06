<?php
function urutan_angka($jumlah) {
$angka = 1;
for ($i = 1; $i <= $jumlah; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $angka++ . " ";
    }
    echo "<br>";
    }
}
echo urutan_angka(7);
?>