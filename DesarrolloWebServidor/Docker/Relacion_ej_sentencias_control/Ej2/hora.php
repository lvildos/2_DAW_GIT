<!-- Realiza un programa que pida una hora por teclado y que muestre luego buenos días,
buenas tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a
20 y de 21 a 5, respectivamente. Sólo se tienen en cuenta las horas, los minutos no se
deben introducir por teclado.
 -->

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $hora = $_GET['num'];

  if ($hora>=6 && $hora<=12){
    echo "Buenos días!!" ;
  }

  if ($hora>=13 && $hora<=20){
    echo "Buenas tardes!!" ;
  }

  if ($hora>=21 && $hora<=5){
    echo "Buenas noches!!" ;
  }


  ?>
</body>
</html>