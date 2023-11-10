<?php include 'includes/header.php';

// inicializamos la variable con un signo de dólar
// siempre finalizamos cada línea con punto y coma ;

$_nombre = "Ana"; // puede comenzar con guión bajo
$nombre_ = "Flor"; // puede finalizar con guión bajo

$nombre = "Cristian";
$nombre = "Juan"; // reasignamos el valor de la variable

echo $nombre;

// constantes
define('constante', 'Este es el valor de la constante');
echo constante; // la imprimimos directamente

// otra forma de declarar constantes
const constante2 = "Este es el valor de la constante 2";
echo constante2;

// se utiliza más el snake case que el camel case
$nombre_completo = "Cristian Peña"; // más utilizado
$nombreCompleto = "Cristian Peña";

include 'includes/footer.php';
