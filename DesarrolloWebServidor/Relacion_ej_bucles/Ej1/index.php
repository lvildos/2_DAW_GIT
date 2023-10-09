<!-- Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

Múltiplos de 5 del 0 al 100 con bucle for: <br><br>

<?php

  for ($i = 0; $i <= 100; $i++) {
    if ($i % 5 == 0) {
        echo $i . " ";
    }
  }
?>

</body>
</html>