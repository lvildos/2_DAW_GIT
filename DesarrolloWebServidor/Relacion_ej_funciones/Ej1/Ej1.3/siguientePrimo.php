<?php

include("../funciones.php");

if (isset($_POST['num'])) {
  $num = $_POST['num'];


  // Llamamos la función "siguientePrimo"

  $siguienteNum = siguientePrimo($num);

  echo "El siguiente primo después del número inicial es " . $siguienteNum;


}

?>