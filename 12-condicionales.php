<?php include 'includes/header.php';

$authenticated = true;

if ($authenticated) {
    echo 'Usuario autenticado correctamente';
} else {
    echo 'Usuario no autenticado';
};

echo '<br>';

// puedo también usar el OR || y el &&
$admin = true;
if ($authenticated && $admin) {
    echo "El usuario autenticado es administrador";
} else {
    echo "El usuario no es administrador o no ha iniciado sesión";
};

echo '<br>';

// Switch
$tecnologias = 'PHP';

switch ($tecnologias) {
    case 'PHP':
        echo 'Soy PHP';
        break;
    case 'Javascript':
        echo 'Soy Javascript';
        break;
    default:
        echo 'No soy nada';
        break;
}



include 'includes/footer.php';
