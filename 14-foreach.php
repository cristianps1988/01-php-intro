<?php include 'includes/header.php';

// Recorrer un array para mostrar HTML

$products = [
    [
        "name" => "Laptop",
        "price" => 1000,
        "avaible" => true
    ],
    [
        "name" => "TV",
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

foreach ($products as $product) { ?>
    <li>
        <p>Producto: <?php echo $product['name']; ?> </p>
        <p>Precio: <?php echo $product['price']; ?> </p>
        <p>Disponible: <?php echo ($product['avaible']) ? 'Si' : 'No'; ?> </p>
    </li>
<?php

}



include 'includes/footer.php';
