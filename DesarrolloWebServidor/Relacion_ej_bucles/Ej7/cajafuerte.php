<!-- Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras.
El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el
mensaje “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se
ha abierto satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte. -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $contraseña=$_GET['num'];
  $contraseña_correcta=1313;
  $num_intentos=4;
  $intento=0;

  do{
    if ($intento>0) {
      echo "Lo siento, esa no es la combinación.";
      echo "Te quedan " . ($intentosMaximos - $intentos) . " intentos.";
      $intentos++;

    }
  }while ($contraseña!=$contraseña_correcta && $intento<$num_intentos);

  if ($contraseña==$contraseña_correcta){
    echo "La caja fuerte se ha abierto satosfactoriamente";
  }

  if ($intento>$num_intentos){
    echo "Ya no tienes más intentos.";
  }

  ?>
  
</body>
</html>