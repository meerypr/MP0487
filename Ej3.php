<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Ejercicio 3</h2> 
<?php
$datos = [
    "Dato 1º" => "Sara",
    "Dato 2º" => "Martínez",
    "Dato 3º" => 23,
    "Dato 4º" => "Barcelona"
];
$datos ['Dato 3º'] = 24;

foreach ($datos as $key => $value){
    echo "$key :$value <br>";
}

?>
</body>
</html>