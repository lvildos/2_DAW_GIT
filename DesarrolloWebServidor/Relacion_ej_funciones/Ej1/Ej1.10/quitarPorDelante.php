<?php

include("../funciones.php");

if (isset($_POST['num1']) && isset($_POST['num2'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];

  // Llamamos la función "quitarPorDetras"

  $numeroResultante = quitarPorDelante($num1,$num2);

  echo "El número resultante es: " . $numeroResultante;



}

?>