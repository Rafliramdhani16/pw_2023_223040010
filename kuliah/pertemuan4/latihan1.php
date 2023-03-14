<?php 
$x = 10;//variable
//memeriksa apakah $angka itu bilangan ganjil
//bilangan yang jika dibagi 2 sisanya 1
function cek_ganjil_genap($angka){//prameter
if($angka % 2 == 1) {
    return "$angka adalah bilangan ganjil!";
}else {
    return " $angka adalah bilagan genap ";
}
}
echo cek_ganjil_genap($x);//argument(nilai sebenernnya)langsung angka juga gpp
echo "<br>";
echo cek_ganjil_genap(5);
echo "<br>";
echo cek_ganjil_genap(200)
 ?>
