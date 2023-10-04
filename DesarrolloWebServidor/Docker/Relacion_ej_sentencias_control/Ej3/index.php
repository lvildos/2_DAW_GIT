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
Introduzca un número del 1 al 7 y te diré el día de la semana. <br><br>
1. Lunes <br>
2. Martes <br>
3. Miércoles <br>
4. Jueves <br>
5. Viernes <br>
6. Sábado <br>
7. Domingo <br>
<br>
  <form action="diasemana.php" method="get">
    <input type="number" name="num">
    <input type="submit" value="Enviar">
  </form>
</body>
</html>