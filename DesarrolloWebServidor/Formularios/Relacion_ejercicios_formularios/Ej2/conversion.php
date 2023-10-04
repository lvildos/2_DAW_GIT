<!-- Realiza un conversor de euros a dólares. Ahora la cantidad en euros que se quiere convertir
se deberá introducir por teclado. -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $conversion= $_GET['euros']*1.06;
  

  echo "La conversion de " . $_GET['euros'] . " euros a dolares es un total de " .$conversion;
  ?>
</body>
</html>