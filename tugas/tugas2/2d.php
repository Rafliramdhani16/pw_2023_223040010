

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .kotak{
      height:60px;
      width: 60px;
      text-align: center;
      line-height: 48px;
      border: 1px solid black;
    }

    .bw{
      display: flex;
    }

    .hitam{
      background-color: black;
    }

    .putih{
      background-color: white;
    }

  </style>
</head>

<body>
  <table border> 
  <?php 
  for ($a = 0; $a <5; $a++){
    echo "<div class=\"bw\">";
    for ($b = 0; $b <5 ; $b++ ){
      echo ($b+ $a) % 2 == 1 ? "<div class=\"kotak putih\"></div>" : "<div class=\"kotak hitam\"></div>";
    }
    echo "</div>";
  }
  
  ?>
  </table>
</body>
</html>