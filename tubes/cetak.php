<?php
require_once __DIR__ . '/vendor/autoload.php';
require 'functions.php';

$user = query("SELECT * FROM user");

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/print.css"
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <thead class="thead-dark">
    <tr>
        <th>#</th>
        <th>gambar</th>
        <th>Nama</th>
        <th>Email</th>
    </tr>';

$i = 1;
foreach ($user as $s) {
    $html .= '<tr>
        <td>'.$i++.'</td>
        <td><img src="asset/'.$s['gambar'].'" width="70"></td>
        <td>'.$s['username'].'</td>
        <td>'.$s['email'].'</td>
        </tr>';
}

$html .= '</thead>
    </table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-pengunjung.pdf', 'I');
?>
