<?php

include("../funciones.php");

if (isset($_POST['num'])) {
  $num = $_POST['num'];


  // Llamamos la función "esPrimo"

  if (esPrimo($num)){
    echo "El número introducido es primo.";
  } else {
    echo "El número introducido no es primo. ";
  }


}

?>