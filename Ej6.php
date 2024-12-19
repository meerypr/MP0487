<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Ejercicio 6</h2> 
<?php
$notas = [
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
];
arsort($notas);
echo "Notas de los estudiantes:";
foreach ($notas as $nombre => $nota ){

    echo "$nombre: $nota ";
}

?>
</body>
</html>
