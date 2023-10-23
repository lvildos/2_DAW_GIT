<?php

//////FUNCIONES

//Función 1. esCapicua: Devuelve verdadero si el número que se pasa como parámetro es capicúa y falso en caso contrario.

function esCapicua($num)
{
  $numVolteado = strrev($num);

  if ($num == $numVolteado) {
    return true;
  } else {
    return false;
  }
}

//Función 2. esPrimo: Devuelve verdadero si el número que se pasa como parámetro es primo y falso en caso contrario

function esPrimo($num)
{
  if ($num <= 1) {
    return false; // 1 y números negativos no son primos
  }

  for ($i = 2; $i * $i <= $num; $i++) {
    if ($num % $i == 0) {
      return false; // Es divisible por un número distinto de 1 y sí mismo
    }
  }
  return true; // No es divisible por ningún número distinto de 1 y sí mismo
}

//Función 3. siguientePrimo: Devuelve el menor primo que es mayor al número que se pasa como parámetro

function siguientePrimo($num)
{
  while (true) {
    $num++;

    if (esPrimo($num)) {
      return $num;
    }
  }
}

//Función 4. potencia: Dada una base y un exponente devuelve la potencia

function potencia($num1, $num2)
{
  $resultado = pow($num1, $num2);
  return $resultado;
}

//Función 5. digitos: Cuenta el número de dígitos de un número entero.

function digitos($num)
{
  $numACadena = (string)($num);

  $numDigitos = strlen($numACadena);

  return $numDigitos;
}


//Función 6. voltea: Le da la vuelta a un número.

function voltea($num)
{
  $numVolteado = strrev($num);
  return $numVolteado;
}

//Función 7. digitoN: Devuelve el dígito que está en la posición n de un número entero. Se empieza contando por el 0 y de izquierda a derecha.


function digitosN($num1, $num2)
{
  $numACadena = (string)($num1);

  if ($num2 >= 0 && $num2 < strlen($numACadena)) {
    $digito = $numACadena[$num2];
    return $digito;
  } else {
    return "Posición no valida";
  }
}

//Función 8. posicionDeDigito: Da la posición de la primera ocurrencia de un dígito dentro de un número entero. Si no se encuentra, devuelve -1.

function posicionDeDigito($num1, $num2)
{
  $numACadena = (string)($num1);

  // Busca la posición de la primera ocurrencia del dígito
  $posicion = strpos($numACadena, (string)$num2);

  if ($posicion !== false) {
    return $posicion;
  } else {
    return -1;
  }
}

//Función 9.  quitaPorDetras: Le quita a un número n dígitos por detrás (por la derecha).

function quitarPorDetras($num1, $num2)
{
  // Asegurarse de que $num2 sea un número positivo
  if ($num2 < 0) {
    return "Debe introducir un número positivo.";
  }

  // Convierte el número a una cadena para trabajar con los dígitos
  $numeroACadena = (string)$num1;

  // Verifica que haya suficientes dígitos para quitar
  if (strlen($numeroACadena) < $num2) {
    return "No hay suficientes dígitos para quitar.";
  }

  // Elimina la cantidad de dígitos especificada desde la derecha
  $numeroResultante = substr($numeroACadena, 0, -1 * $num2);

  return (int)$numeroResultante; // Convierte la cadena resultante en un número entero


}

//Función 10. quitaPorDelante: Le quita a un número n dígitos por delante (por la izquierda).

function quitarPorDelante($num1, $num2)
{
  // Asegurarse de que $num2 sea un número positivo
  if ($num2 < 0) {
    return "Debe introducir un número positivo.";
  }

  // Convierte el número a una cadena para trabajar con los dígitos
  $numeroACadena = (string)$num1;

  // Verifica que haya suficientes dígitos para quitar
  if (strlen($numeroACadena) < $num2) {
    return "No hay suficientes dígitos para quitar.";
  }

  // Elimina la cantidad de dígitos especificada desde la derecha
  $numeroResultante = substr($numeroACadena, $num2);

  return (int)$numeroResultante; // Convierte la cadena resultante en un número entero


}

//Función 11. pegaPorDetras: Añade un dígito a un número por detrás.

function pegaPorDetras($num1, $num2)
{
  // Verifica que $num2 sea un dígito válido (0-9)
  if ($num2 < 0 || $num2 > 9) {
    return "El segundo argumento debe ser un dígito válido (0-9).";
  }

  // Convierte el número a una cadena para trabajar con los dígitos
  $numeroACadena = (string)$num1;

  // Agrega el dígito al final de la cadena
  $numeroACadena .= (string)$num2;

  return (int)$numeroACadena; // Convierte la cadena resultante en un número entero
}

//Función 12. pegaPorDelante: Añade un dígito a un número por delante.

function pegaPorDelante($num1, $num2)
{
  // Verifica que $num2 sea un dígito válido (0-9)
  if ($num2 < 0 || $num2 > 9) {
    return "El segundo argumento debe ser un dígito válido (0-9).";
  }

  // Convierte el número a una cadena para trabajar con los dígitos
  $numeroACadena = (string)$num1;

  // Agrega el dígito al final de la cadena
  $numeroACadena = (string)$num2 . $numeroACadena;

  return (int)$numeroACadena; // Convierte la cadena resultante en un número entero
}


//Función 13. trozoDeNumero: Toma como parámetros las posiciones inicial y final dentro de un número y devuelve el trozo correspondiente.

function trozoDeNumero($numero, $posicionInicial, $posicionFinal) {
  $numeroStr = (string)$numero;
  $longitud = strlen($numeroStr);

  if ($posicionInicial < 0 || $posicionFinal < 0 || $posicionInicial >= $longitud || $posicionFinal >= $longitud) {
      return "Las posiciones iniciales y finales no son válidas.";
  }

  $trozo = substr($numeroStr, $posicionInicial, $posicionFinal - $posicionInicial + 1);

  return (int)$trozo;
}

//Función 14. juntaNumeros: Pega dos números para formar uno.

function juntaNumeros($num1, $num2) {
  // Concatena los dos números como cadenas y luego los convierte en un número entero
  $resultado = (int)($num1 . $num2);
  return $resultado;
}