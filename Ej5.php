<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Ejercicio 5</h2> 

<?php

$letters = "a,b,c,d,e,f";

$array = explode(",", $letters);
rsort($array);
$contador = 6;

foreach ($array as $key => $value) {
    echo "letter " . ($contador) . " : " . $value . "<br>";
    $contador --;
}

?>

</body>
</html>
