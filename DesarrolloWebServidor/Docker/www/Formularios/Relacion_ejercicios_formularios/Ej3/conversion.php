<!-- Realiza un conversor de dólares a euros. La cantidad en dolares que se quiere convertir se
deberá introducir por teclado.
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
  $conversion= $_GET['dolares']*0.94;
  

  echo "La conversion de " . $_GET['dolares'] . " dolares a euros es de " .$conversion;
  ?>
</body>
</html>