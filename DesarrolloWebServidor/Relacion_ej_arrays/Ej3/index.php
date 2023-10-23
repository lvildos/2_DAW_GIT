<!-- Escribe un programa que genere 15 números aleatorios y que los almacene en un array.
Rota los elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la
posición 1, el de la 1 a la 2, etc. El número que se encuentra en la última posición debe
pasar a la posición 0. Finalmente, muestra el contenido del array del inicio y el array rotado.. -->

<?php

$array1 = array();
$array2 = array();

for ($i = 0; $i < 15; $i++) {
  $array1[$i] = rand(0, 100);
}

$array2[0] = $array1[14]; //La posicion 0 de array2 es igual a la posicion 14 del array1.

for ($i = 0; $i <= 13; $i++) {
  $array2[$i + 1] = $array1[$i];
}

echo "Array original: ";
for ($i = 0; $i < 15; $i++) {
  echo $array1[$i] . " ";
}

echo "<br>";

echo "Array modificado: ";
for ($i = 0; $i < 15; $i++) {
  echo $array2[$i] . " ";
}

?>