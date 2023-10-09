<!-- Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe
mostrar en una tabla (<table> en HTML) -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Tabla de multiplicar</h3>
  <?php

  $numero = $_GET['num'];

  echo '<table border="1">';
  echo '<tr><th>Operación</th><th>Resultado</th></tr>';

  for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo '<tr><td>' . $numero . ' x ' . $i . '</td><td>' . $resultado . '</td></tr>';
  }

  ?>
</body>

</html>