<?php include 'includes/header.php';

// los arreglos asociativos son parecidos a los objetos en JS
// las consultas a sql siempre vienen como arrays

//Creamos un array con los datos, para asignar las propiedades utilizamos una flecha
$cliente = [
    "nombre" => "Cristian",
    "saldo" => 500,
    "info" => [ // puedo crear arreglos dentro de arreglos
        "tipo" => "Premium",
        "logged" => true
    ]
];

// mostrar el arreglo en pantalla
echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br/>";

// acceder a un valor del arreglo, utilizamos corchete
echo $cliente["nombre"];
echo "<br/>";

// para acceder a un valor dentro de un arreglo dentro de otro arreglo
echo $cliente["info"]["tipo"];
echo "<br/>";

// agregar propiedades al arreglo
$cliente["id"] = 12357253;

// sobreescribir propiedades del arreglo
$cliente["nombre"] = "Cristian Camilo";

// agregar propiedades al arreglo dentro del arreglo
$cliente["info"]["pais"] = "Mexico";

echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br/>";


include 'includes/footer.php';
