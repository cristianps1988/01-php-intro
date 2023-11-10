<?php include 'includes/header.php';

// el include me sirve para reutilizar contenido y mostrarlo
// si hago referencia a un archivo que no existe, me muestra un error y se crashea la página

echo "Después del include";

// revisa si ya se incluyó el archivo, si no lo incluye... si ya se incluyó, ignora esta línea
include_once 'includes/header.php';

// cuando utilizar include o require?
// utilizar require para funciones e include para páginas
require 'funciones.php';
echo "<br>";
iniciarApp();


// require hace lo mismo que include, pero si hay un error, me muestra el error y se detiene la ejecución del script    
include 'includes/footer.php';
