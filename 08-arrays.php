<?php include 'includes/header.php';

$carrito = ['Televisor', 'Radio', 'Computador', 'Celular'];

// util para ver el contenido de un array
echo '<pre>';
var_dump($carrito);
echo '</pre>';
echo '<br>';

// acceder a un elemento del array
echo $carrito[2];
echo '<br>';

// añadir un elemento al array en una posición definida
$carrito[4] = 'Tablet';
echo "<br>";

// añadir elemento al final del array
array_push($carrito, 'Audifonos');

// añadir elemento al inicio del array
array_unshift($carrito, 'Teclado');

echo '<pre>';
var_dump($carrito);
echo '</pre>';
echo '<br>';


// otra forma de crear arrays
$clientes = array('Juan', 'Pedro', 'Ana');
echo '<pre>';
var_dump($clientes);
echo '</pre>';

include 'includes/footer.php';
