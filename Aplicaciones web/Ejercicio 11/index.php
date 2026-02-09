<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>


<form action="saludo_get.php" method="get">


    <input type="text" name="name">
    <button type="submit">Saludar</button>


</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $name = $_GET['name'];

    htmlspecialchars($name);

    $saludo = "Hola $name";

    echo htmlspecialchars($saludo);
}

?>
    
</body>
</html>