<?php include 'includes/header.php';

// While
echo "<h3>Con While</h3>";
$i = 0;
while ($i <= 10) {
    echo $i . '<br>';
    $i++;
};

echo '<br>';

// Do while
// la diferencia es que este primero hace la acción y luego ejecuta la comprobación
echo "<h3>Con Do While</h3>";
$j = 0;
do {
    echo $j . '<br>';
    $j++;
} while ($j <= 10);

echo '<br>';

// For
echo "<h3>Con For</h3>";
for ($i = 0; $i <= 10; $i++) {
    echo $i . '<br>';
};

echo '<br>';

echo "<h3>FizzBuzz con for</h3>";
for ($i = 1; $i <= 30; $i++) {
    if ($i % 15 == 0) {
        echo "FizzBuzz" . "<br>";
    } else if ($i % 3 == 0) {
        echo "Fizz" . "<br>";
    } else if ($i % 5 == 0) {
        echo "Buzz" . "<br>";
    } else {
        echo $i . "<br>";
    }
};

echo '<br>';

// Recorrer un array con un for normal
echo "<h3>For normal para recorrer arrays</h3>";
for ($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i] . '<br>';
};

// Foreach
echo "<h3>Foreach para recorrer arrays</h3>";
$clientes = ['Cristian', 'Maidelin', 'Daniela', 'Flor'];
foreach ($clientes as $cliente) {
    echo $cliente . '<br>';
}

// foreach para recorrer un array asociativo (objeto)
echo "<h3>For normal para recorrer arrays asociativos</h3>";
$person = [
    "nombre" => "Cristian",
    "apellido" => "Peña",
    "edad" => 35
];

foreach ($person as $key => $value) {
    echo $key . ": " . $value . '<br>';
}
echo '<br>';


include 'includes/footer.php';
