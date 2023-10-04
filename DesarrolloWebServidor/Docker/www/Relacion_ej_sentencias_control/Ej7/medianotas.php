<!-- Realiza un programa que calcule la media de tres notas. --> 

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

  if (($nota1==0) OR ($nota2==0) OR ($nota3==0)){
    echo "Ninguna nota puede ser menor que 0.";

  } else{
    $medianotas= ($nota1 + $nota2 + $nota3) /3;
    echo "La media de las notas es " . $medianotas; 
  }

?>
</body>
</html>