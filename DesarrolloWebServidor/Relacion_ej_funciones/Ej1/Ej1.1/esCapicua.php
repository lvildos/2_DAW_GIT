<?php

include("../funciones.php");

if (isset($_POST['num'])) {
  $num = $_POST['num'];


  // Llamamos la función "voltea"
  $resultado = esCapicua($num);

  if($resultado == true){
    echo "El número es capicúa";
  } else {
    echo "El número no es capicúa";
  }


}

?>