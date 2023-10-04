<!-- Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas
extras. Escribe un programa que calcule el salario semanal de un trabajador teniendo en
cuenta que las horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora.
A partir de la hora 41, se pagan a 16 euros la hora. -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  $horas = $_GET['num'];

  if ($horas<= 40){
    $salario = $horas * 12;
    echo "El salario es de " . $salario . " euros.";
  }

  if ($horas>=41){
    $salario_extra = (40*12) + (($horas - 40)*16);
    echo "El salario es de " . $salario_extra . " euros.";
  }

?>
</body>
</html>