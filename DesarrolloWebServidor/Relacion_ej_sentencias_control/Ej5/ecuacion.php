<!-- Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0). --> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  $a = $_GET['num1'];
  $b = $_GET['num2'];

  if ($a==0){
    echo "La ecuación no tiene una solución válida ya que se multiplica 0 * x ";
  }

  if ($b==0){
    echo "La igualación es contradictoria.";

  }

  if ($a!=0 && $b!=0){
    $x= -$b/$a;
    echo "El resultado de la ecuación es " . $x;

  }

?>
</body>
</html>