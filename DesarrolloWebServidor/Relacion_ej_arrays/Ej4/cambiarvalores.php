<!-- Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por
pantalla separados por espacios. El programa pedirá entonces por teclado dos valores y a
continuación cambiará todas las ocurrencias del primer valor por el segundo en la lista
generada anteriormente. -->

<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$numero = array();


echo "Array original " . "<br>";

for ($i = 0; $i <= 100; $i++) {
  $numero[$i] = rand(0, 20);
  echo $numero[$i] . " ";
}


echo "<br><br>" . "Array modificado " . "<br>";

for ($i = 0; $i<=100; $i++) {
  if ($numero[$i] == $num1){
    $numero[$i] = $num2;
  }elseif ($numero [$i] == $num2){
    $numero [$i] = $num1;
  }
  echo $numero[$i] . " ";
}






?>