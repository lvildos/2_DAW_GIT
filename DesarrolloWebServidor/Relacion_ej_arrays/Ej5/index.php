<!-- Realiza un programa que genere 8 números enteros y que luego muestre esos números de
colores, los pares de un color y los impares de otro. -->

<?php 

$numero = array();

for ($i = 0; $i<=8; $i++){
  $numero[$i] = rand(1,10);


  if ($numero[$i]%2==0){
    echo '<span style="color: red;">' . $numero[$i] . '</span> ';
  } elseif ($numero[$i]%2!=0){
    echo '<span style="color: blue;">' . $numero[$i] . '</span> ';
  
  }

}

?>