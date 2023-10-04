<!-- Amplía el programa anterior para que diga la nota del boletín (insuficiente, suficiente, bien,
notable o sobresaliente). -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  $nota1 = $_GET['num1'];
  $nota2 = $_GET['num2'];
  $nota3 = $_GET['num3'];

  if (($nota1 == 0) or ($nota2 == 0) or ($nota3 == 0)) {
    echo "Ninguna nota puede ser menor que 0.";
  } else {
    $medianotas = ($nota1 + $nota2 + $nota3) / 3;
    $medianotas = round($medianotas, 0, PHP_ROUND_HALF_UP);
    echo "La media de las notas es " . $medianotas . ". <br>";

    if ($medianotas < 5) {
      echo " La nota final es 'Insuficiente'.";
    } elseif ($medianotas == 5) {
      echo " La nota final es 'Suficiente'.";
    } elseif ($medianotas == 6) {
      echo " La nota final es 'Bien'.";
    } elseif ($medianotas == 7 || $medianotas == 8) {
      echo " La nota final es 'Notable'.";
    } elseif ($medianotas == 9 || $medianotas == 10) {
      echo " La nota final es 'Sobresaliente'.";
    }

  }

  ?>
</body>

</html>