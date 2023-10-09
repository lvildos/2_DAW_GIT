<!-- Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe
mostrar en una tabla (<table> en HTML) --> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
Introduzca un número y le mostrare su tabla de multiplicar. <br><br>

<br>
  <form action="tablamultiplicar.php" method="get">
    <input type="number" name="num">
    <input type="submit" value="Enviar">
  </form>
</body>
</html>