<?php

include("../funciones.php");

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
  $numero = $_POST['num1'];
  $posicionInicial = $_POST['num2'];
  $posicionFinal = $_POST['num3'];

  // Llama a la función trozoDeNumero con los valores del formulario
  $resultado = trozoDeNumero($numero, $posicionInicial, $posicionFinal);
  echo "El trozo del número es: " . $resultado;

}
