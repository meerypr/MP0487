<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Ejercicio 7</h2> 
<?php

$notas = [
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
];
$media = array_sum($notas) / count($notas);
$media = round ($media, 2);

echo "Media de las notas: $media <br>";
echo "Alumnos con nota por encima de la media: <br>";

foreach ($notas as $nombre => $nota){
    if ($nota > $media){
      echo "$nombre <br> ";   
    }
}
?>
</body>
</html>