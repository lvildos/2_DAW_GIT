<!-- Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while. --> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  A continuación se muestran los números del 320 al 160 contanto de 20 en 10 con un bucle do-while: <br><br>
  <?php 

  $numero=320;

  do{
    echo $numero . " ";
    $numero-=20;
  } while ($numero>=160);


  ?>
  
</body>
</html>