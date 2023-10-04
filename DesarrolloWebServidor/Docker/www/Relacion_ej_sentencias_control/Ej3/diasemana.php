<!-- Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre
del día de la semana. --> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $dia = $_GET['num'];

  if ($dia==1){
    echo "Lunes" ;
  }

  if ($dia==2){
    echo "Martes" ;
  }

  if ($dia==3){
    echo "Miércoles" ;
  }

  if ($dia==4){
    echo "Jueves" ;
  }

  if ($dia==5){
    echo "Viernes" ;
  }

  if ($dia==6){
    echo "Sábado" ;
  }

  if ($dia==7){
    echo "Domingo" ;
  }

  ?>
</body>
</html>