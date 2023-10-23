<!-- Escribe un formulario que pida 4 números y que luego muestre los números introducidos
junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo
respectivamente. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $num3 = $_POST['num3'];
  $num4 = $_POST['num4'];

  $numeros = array($num1, $num2, $num3, $num4);

  $maximo = max($numeros);
  $minimo = min($numeros);

  foreach ($numeros as $numero) {
    echo $numero;

    if ($numero == $maximo) {
      echo " - Máximo";
    } elseif ($numero == $minimo) {
      echo " - Mínimo";
    }

    echo "<br>";
  }
  ?>

</body>

</html>