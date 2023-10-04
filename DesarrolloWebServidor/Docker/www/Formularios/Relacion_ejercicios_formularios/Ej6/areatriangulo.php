<!-- Escribe un programa que calcule el área de un triangulo. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $areatriangulo= ($_GET['base']*$_GET['altura']) / 2;
  

  echo "El área del triangulo con la base y altura introducidas es: " . $areatriangulo; 
  ?>
</body>
</html>