<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <h2>Ejercicio 8</h2> 
<?php
$notas = [
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
];
$notaMaxima = max($notas);
$mejoralumno = array_search($notaMaxima, $notas);
echo "<br> La nota más alta es $notaMaxima y el mejor alumno es $mejoralumno"
?>
</body>
</html>