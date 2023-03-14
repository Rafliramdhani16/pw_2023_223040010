<?php 
//array
//membuat array
$hari = array('senin', 'selasa', 'rabu', 'kamis', 'kamis', 'jumat');
$bulan = ['januari','februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus'];
$myArray= ['sandhika', 39 , false];
$binatang = ['🐕', '🐈‍⬛', '🐒', '🐨', '🐺'] ;
//mencetak array
echo $hari[1]; // 1 elemen menggunakan indexnya
echo "<hr>";
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";
var_dump($myArray);
echo "<hr>";

//manipulasi array
// menambah elemen diakhir menggunakan index

$hari[]= 'sabtu';
$hari[]= "minggu";// kutik 2 agar tidak ketimpa
print_r($hari);
echo "<hr>";
//menambah elemen diakhir array
array_push($bulan, 'september', 'oktober');
print_r($bulan);
echo "<hr>";
//menambah elemen diawal menggunakan array_unshif()
array_unshift($binatang, '🐍');
print_r($binatang);
echo "<hr>";
//menghapus elemen diakhir, menggunkan array_pop()
array_pop($hari);
print_r($hari);
echo "<hr>";
//menghapus elemen diawal, menggunakan array shift
array_shift($hari);
print_r($hari);
echo "<hr>";
?>