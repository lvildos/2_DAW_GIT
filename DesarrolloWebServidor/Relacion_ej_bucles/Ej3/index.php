<!-- Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle do-while. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
Múltiplos de 5 del 0 al 100 con bucle do-while: <br><br>

  <?php
  $numero = 0;

  do {
    if ($numero % 5 == 0) {
      echo $numero . " ";
    }
    $numero++;
  } while ($numero <= 100);

  ?>

</body>

</html>