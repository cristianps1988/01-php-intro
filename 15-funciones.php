<?php
// se debe declarar el strict_types de primero, antes que cualquier otra cosa
declare(strict_types=1); // para que no se puedan introducir datos de tipo string en los parámetros de la función

include 'includes/header.php';



// parámetros por default = 0 ... int para declarar el tipo
function sumar(int $number1 = 0, int $number2 = 0)
{
    echo $number1 + $number2;
};

sumar(2, 3);
echo "<br>";

sumar(50, 34);
echo "<br>";

sumar(5, 1);
echo "<br>";

//sumar(5, 'hello'); // aquí me da error porque declaré que debía recibir un número


include 'includes/footer.php';
