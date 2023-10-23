<!-- Escribe un formulario que pida 4 números y que luego muestre los números introducidos
junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo
respectivamente. --> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<h3>Introduzca cuatro numeros y le diré el máximo y el mínimo</h3>
<body>
  <form action="maxmin.php" method="post">
    <input type="number" name="num1">
    <input type="number" name="num2">
    <input type="number" name="num3">
    <input type="number" name="num4">
    <input type="submit" value="Enviar">
  </form>

</body>

</html>