<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$nilai_awal =10; //inisialisasi 
 // Penggulangan while
 // 1.inisialisasi  nilai awal
 // 2. kondisi terminasi kapan penggulangannya berenti
 // 3. increment decrement merupakan penambahan nilai atau pengurangan nilai terminasi
echo "mulai <br>";
while ($nilai_awal >=1) {// kondisi terminasi
    echo "hello world $nilai_awal <br>";
//$nilai_awal += 1;
$nilai_awal --; // hanya berlaku di satu
}
echo "<hr>";
//for
for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal++) {
echo "hello world $nilai_awal x<br>";
}
?>  
</body>
</html>

