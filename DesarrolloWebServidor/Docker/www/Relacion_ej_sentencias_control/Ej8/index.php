<!-- Amplía el programa anterior para que diga la nota del boletín (insuficiente, suficiente, bien,
notable o sobresaliente). --> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<form action="mediaboletin.php" method="get">
  <h1>Introduzca tres notas y le haré la media</h1> 
  <br>
    Introduzca la primera nota
    <input type="number" name="num1">

    <br>

    Introduzca la segunda nota
    <input type="number" name="num2">
    <br>

    Introduzca la tercera nota
    <input type="number" name="num3">
    <br><br>

    <input type="submit" value="Enviar">

  </form>
</body>
</html>