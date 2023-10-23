<?php

include("../funciones.php");

if (isset($_POST['num'])) {
  $num = $_POST['num'];


  // Llamamos la función "siguientePrimo"

  $numDigitos = digitos($num);

  echo "La cantidad de dígitos del número introducido es: " . $numDigitos;


}

?>