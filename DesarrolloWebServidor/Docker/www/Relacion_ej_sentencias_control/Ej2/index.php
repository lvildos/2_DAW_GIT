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
Introduzca la hora para saber el tramo horario. Introduzcala los minutos. <br>
  <form action="hora.php" method="get">
    <input type="number" name="num">
    <input type="submit" value="Enviar">
  </form>
</body>
</html>