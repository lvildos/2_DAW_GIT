<!-- Escribe un programa que calcule el salario semanal de un trabajador en base a las horas
trabajadas. Se pagarán 12 euros por hora. -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $salario= $_GET['num']*12*7;
  

  echo "El total del salario semanal es de : " . $salario . " euros."; 
  ?>
</body>
</html>