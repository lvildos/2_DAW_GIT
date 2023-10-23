<?php

include("../funciones.php");

if (isset($_POST['num'])) {
  $num = $_POST['num'];


  // Llamamos la función "voltea"
  $numVolteado = voltea($num);

  echo "Número ingresado: " . $num . "<br>";
  echo "Número volteado: " . $numVolteado;

}

?>