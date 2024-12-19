<?php
// Definición del inventario de cómics
$inventario = [
    'suspense_terror' => [
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
    ],
    'accion' => [
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
    ],
];

// Función principal
// Antes del descuento
echo "<h2>Inventario inicial</h2>";
mostrarComicsEnTabla();
mostrarValorAlmacen();

// Aplicar descuento
echo "<h2>Aplicando descuento a los cómics en japonés</h2>";
aplicarDescuentoManga();

// Inventario después del descuento
echo "<h2>Inventario actualizado</h2>";
mostrarComicsEnTabla();
mostrarValorAlmacen();

function mostrarComicsEnTabla()
{
    global $inventario;
    echo '<br>';
    echo '<table border="1" cellpadding="5">';
    echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>';

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            echo '<tr>';
            echo "<td>$categoria</td>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo '</tr>';
        }
    }

    echo '</table>';
}

function mostrarValorAlmacen()
{
    global $inventario;
    $totalValor = 0;

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            $totalValor += $comic['precio'] * $comic['stock'];
        }
    }

    echo "<p><strong>Total valor del almacén:</strong> $totalValor</p>";
}

function aplicarDescuentoManga()
{
    global $inventario;

    foreach ($inventario as &$categoria) { // Usar referencia para modificar el inventario
        foreach ($categoria as &$comic) {
            if ($comic['idioma'] == 'Japonés') {
                $comic['precio'] *= 0.7; // Aplicar un descuento del 30%
            }
        }
    }
}
?>
