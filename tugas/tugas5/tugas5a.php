<?php 
    $mahasiswa = 
    [
        [
            "nama" => "Rafli Ramdhani",
            "NRP" => "223040010",
            "email" => "rafli.223040010@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "cat1.jpg"
        ],
        [
            "nama" => "Diaz Alfiari Rachmad",
            "NRP" => "223040024",
            "email" => "diaz.223040024@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "cat2.jpg"
        ],
        [
            "nama" => "Ahmad Mulia Huda",
            "NRP" => "223040029",
            "email" => "ahmad.223040029@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "cat3.jpg"
        ],
        [
            "nama" => "Bintang Arya Putra Yusar",
            "NRP" => "223040032",
            "email" => "bintang.223040032@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "cat4.jpg"
        ],
        
        [
            "nama" => "MUHAMMAD FAUZAN DWI PUTERA",
            "NRP" => "223040033",
            "email" => "fauzan.223040033@mail.unpas.co.id",
            "jurusan" => "Teknik Informatika",   
            "gambar" => "cat5.jpg"
        ],
    
      
    
        
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"]; ?> "></li>
        <li>Nama :<?= $mhs["nama"]; ?></li>
        <li>NRP :<?= $mhs["NRP"]; ?></li>
        <li>email :<?= $mhs["email"]; ?></li>
        <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>