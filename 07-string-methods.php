<?php include 'includes/header.php';

$nombre1 = "Cristian";
$nombre2 = "   Cristian      Camilo       ";

// longitud de un string
echo strlen($nombre1);
echo "<br>";
var_dump($nombre2);
echo "<br>";

// trim() quita espacios en blanco al inicio y al final
echo trim($nombre2);
echo "<br>";

// strtolower() convierte a minuscula
echo strtolower($nombre1);
echo "<br>";

//strtoupper() convierte a mayuscula
echo strtoupper($nombre1);
echo "<br>";

$correo1 = 'correo@correo.com';
$correo2 = 'Correo@correo.com';
var_dump($correo1 === $correo2);
echo "<br>";
var_dump(strtolower($correo1) === strtolower($correo2));
echo "<br>";

// reemplazar
echo str_replace('C', 'K', $nombre1);
echo "<br>";

// revisar si existe en el string, me devuelve la posición en la que está
echo strpos($nombre1, 'Cris');
echo "<br>";
echo strpos($nombre1, 'tian');
echo "<br>";
echo strpos($nombre1, 'z'); // si no existe, no devuelve nada
echo "<br>";

// concatenar
$cliente = 'Pedro';
$tipoCliente = 'Premium';

echo 'El cliente ' . $cliente . ' es ' . $tipoCliente; // se separan con puntos las variables y los strings
echo "<br>";
echo "El cliente {$cliente} es {$tipoCliente}"; // parecioo a los template strings de JS



include 'includes/footer.php';
