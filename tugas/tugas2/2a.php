

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
$namadepan = "rafli";
$namabelakang = "ramdhani";

  for ($i = 1; $i <= 100; $i++){

   if  ($i % 3 == 0 && $i % 5 ==0 ){
      echo " $namadepan $namabelakang <br>" ;
    }  
    else  if ( $i %3 ==0 ){ 
      echo "$namadepan  <br>";

    } else if ($i %5 ==0) {
      echo "$namabelakang <br>";
    } else{
      echo "$i <br>";
    }

    
  }
 
?>
</body>
</html>
