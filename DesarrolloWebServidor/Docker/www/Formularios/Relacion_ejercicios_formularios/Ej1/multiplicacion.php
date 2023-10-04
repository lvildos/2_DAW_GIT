<!-- Realiza un programa que pida dos números y luego muestre el resultado de su
multiplicación. --> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $multiplicacion= $_GET['num1']*$_GET['num2'];
  ?>

  La multiplicacion de <?php echo $_GET['num1'] ?> y <?php echo $_GET['num2'] ?>
  es de <?php echo $multiplicacion ?>

</body>
</html>