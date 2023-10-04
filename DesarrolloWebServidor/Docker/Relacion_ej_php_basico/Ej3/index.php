<!--Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su
correspondiente traducción al castellano. Las palabras deben estar distribuidas
en dos columnas. Utiliza la etiqueta <table> de HTML. -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php

  echo "
  <table border=\"2\">
  <tr>
    <td style=\"width: 80px; text-align:center\"><b>Español<b></td>
    <td style=\"width: 80px; text-align:center\"><b>Inglés<b></td>
  </tr>
  <tr>
    <td style=\"width: 80px; text-align:center\">Cama</td>
    <td style=\"width: 80px; text-align:center\">Bed</td>
  </tr>
  <tr>
    <td style=\"width: 80px; text-align:center\">Manzana</td>
    <td style=\"width: 80px; text-align:center\">Apple</td>
  </tr>
  <tr>
    <td style=\"width: 80px; text-align:center\">Calor</td>
    <td style=\"width: 80px; text-align:center\">Hot</td>
  </tr>
    

  </table>
  ";
  
  ?>
</body>
</html>