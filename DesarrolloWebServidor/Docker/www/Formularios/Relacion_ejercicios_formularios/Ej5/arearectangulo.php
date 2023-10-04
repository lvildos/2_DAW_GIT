<!-- Escribe un programa que calcule el área de un rectángulo. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $arearectangulo= $_GET['base']*$_GET['altura'];
  

  echo "El área del rectangulo con la base y altura introducidas es: " . $arearectangulo; 
  ?>
</body>
</html>