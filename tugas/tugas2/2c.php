<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tugas 2 c</title>

  <style>
    .kotak{
      width:60px;
      background-color: salmon;
      text-align: center;
      line-height: 60px;
      border: 1px solid black;
    
    }

    .bw{
      display: flex;
    }

  </style>
</head>

<body>
  <?php 
  for ($x = 10; $x >= 1; $x--) {
    echo "<div class=\"bw\">";
    for ( $y= 1; $y <= $x; $y++){
      echo "<div class=\"kotak\">$y</div>";
    }
    echo "</div>";
  }
  ?>
  
  
</body>
</html>
