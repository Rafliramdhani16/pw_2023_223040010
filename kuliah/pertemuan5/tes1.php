<?php
 function cetak_bintang($angka)
{
    for ($i = 1; $i <= $angka; $i++){
        for ($angka = 1; $angka <=3; $angka++){
            echo "* ";
        }
        echo "<br>";
}
}
cetak_bintang(3);
 ?>
 