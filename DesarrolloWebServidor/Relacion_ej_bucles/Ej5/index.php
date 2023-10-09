<!-- Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle while. --> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  A continuación se muestran los números del 320 al 160 contanto de 20 en 10 con un bucle while: <br><br>
  <?php 

  $num=320;

  while ($num>=160){
    echo $num . " ";
    $num-=20;
  }


  ?>
  
</body>
</html>