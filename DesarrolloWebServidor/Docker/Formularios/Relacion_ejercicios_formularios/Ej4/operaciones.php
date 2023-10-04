<!-- Escribe un programa que sume, reste, multiplique y divida dos números introducidos por
teclado. -->
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $suma= $_GET['num1']+$_GET['num2'];
  $resta= $_GET['num1']-$_GET['num2'];
  $multiplicacion= $_GET['num1']*$_GET['num2'];
  $division= $_GET['num1']/$_GET['num2'];
  

  echo "<h1>Con los dos números introducidos, se realizan las siguientes operaciones: </h1>" . "<br>"
  . "La suma de ambos números es: " . $suma . "<br>" 
  . "La resta de ambos números es: " . $resta . "<br>"
  . "La multiplicacion de ambos números es: " . $multiplicacion . "<br>"
  . "La division de ambos números es: " . $division;

  ?>
</body>
</html>