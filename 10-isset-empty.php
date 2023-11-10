<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = ['Cristian', 'Maidelin'];

// empty revisa si el array esta vacio
var_dump(empty($clientes)); // true: el array está vacio
echo '<br>';
var_dump(empty($clientes3)); // false: el array no está vacio
echo '<br>';

// isset revisa si una variable esta definida o el array esta creado

// podemos revisar si el array está creado
var_dump(isset($clientes)); // true: el array está creado
echo '<br>';
var_dump(isset($clientes4)); // false: el array no está creado
echo '<br>';

// podemos revisar si una propiedad del array  esta definida
$cliente = [
    "nombre" => "Cristian",
    "id" => 1345626
];
var_dump(isset($cliente['nombre'])); // true: la propiedad nombre está definida
echo '<br>';
var_dump(isset($cliente['apellido'])); // false: la propiedad apellido no está definida
echo '<br>';

include 'includes/footer.php';
