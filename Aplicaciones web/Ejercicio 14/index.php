<?php

$productos = [
    ['name' => 'pan', 'precio' => 5, 'detalle' => 'Es pan'],
    ['name' => 'agua', 'precio' => 5, 'detalle' => 'Es agua'],
    ['name' => 'arroz', 'precio' => 55, 'detalle' => 'Es maiz']
];

$table = '<table border="1">';
$table .= '<tr><th>Nombre</th><th>Precio</th><th>Detalle</th><th>Accion</th></tr>';
foreach ($productos as $producto) {
    $table .= "<tr><td>$producto['name']</td><td>$producto</td></tr>"
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>