<!--Escribe un programa que utilice las variables $x y $y. Asignales los valores 144 y
999 respectivamente. A continuación, muestra por pantalla el valor de cada
variable, la suma, la resta, la división y la multiplicación.
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
  $x = 144; 
  $y = 999;

  $suma = $x + $y;
  $resta = $x - $y;
  $division = $x / $y;
  $multiplicacion = $x * $y;

  echo "El valor de x es: " . $x . "<br>" . "El valor de y es: " . $y . "<br><br>" . 
  "La suma de ambos da como resultado: " . $suma . "<br>" .
  "La resta de ambos da como resultado: " . $resta . "<br>" .
  "La division de ambos da como resultado: " . $division . "<br>" .
  "La multiplicacion de ambos da como resultado: " . $multiplicacion ;
  
  
  
  ?>
</body>
</html>