<?php include 'includes/header.php';


$products = [
    [
        "name" => "Laptop",
        "price" => 1000,
        "avaible" => true
    ],
    [
        "name" => "Televisión",
        "price" => 600,
        "avaible" => false
    ],
    [
        "name" => "Radio",
        "price" => 100,
        "avaible" => true
    ],
    [
        "name" => "Iphone",
        "price" => 1100,
        "avaible" => true
    ],
    [
        "name" => "Tablet",
        "price" => 800,
        "avaible" => false
    ]
];

echo "<prev>";
var_dump($products);
echo "</prev>";

echo "<br>";

// json_encode convierte un array a json (string)
$json = json_encode($products, JSON_UNESCAPED_UNICODE); // JSON_UNESCAPED_UNICODE para que no se transformen las tildes a unicode

echo "<prev>";
var_dump($json);
echo "</prev>";

echo "<br>";

// json_decode convierte un json a array
$jsonArray = json_decode($json);

echo "<prev>";
var_dump($jsonArray);
echo "</prev>";

include 'includes/footer.php';
