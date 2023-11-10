<?php include 'includes/header.php';

// verificar si el array tiene una propiedad
$elements = ['Televisor', "Tablet", "Radio"];
var_dump(in_array("radio", $elements));
echo "<br>";
var_dump(in_array("Radio", $elements));
echo "<br>";

// ordenar array en forma ascendente
$numbers = [1, 4, 6, 2, 8, 5];
sort($numbers);

// ordenar array de forma descendente
rsort($numbers);

echo "<pre>";
var_dump($numbers);
echo "</pre>";

// ordenar arrays asociativos (objetos)
$cliente = [
    "nombre" => "Juan",
    "saldo" => 200,
    "estado" => "Activo"
];

// ordenar por los valores (primero pone los números y luego los strings en orden alfabético)
asort($cliente);
arsort($cliente); // ordena los valores de forma descendente

// ordenar el array por las llaves - keys
ksort(($cliente));
krsort(($cliente)); // ordena las llaves de forma descendente


echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';
