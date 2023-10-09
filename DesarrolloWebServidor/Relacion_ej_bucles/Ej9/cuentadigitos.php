<!-- Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado. -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $numero = $_GET['num'];
  $contador = 0;

  if ($numero<0){
    $numero = $numero * -1;

  }

  if ($numero ==0){
    $contador = 1;
  }

  while ($numero!=0){
    $numero = (int)($numero / 10);
    $contador++;
  }

  echo "El número introducido tiene " . $contador . " dígitos."
  
  ?>
</body>
</html>