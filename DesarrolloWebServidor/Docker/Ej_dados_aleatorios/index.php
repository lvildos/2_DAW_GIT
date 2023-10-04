<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

$num1 = rand(1, 6);
echo '<img src="./img/' . $num1 . '.svg">';

$num2 = rand(1, 6);
echo '<img src="./img/' . $num2 . '.svg">';

 echo "<br>" . "La suma de ambos dados es " . ($num1 + $num2);

?>

</body>
</html>