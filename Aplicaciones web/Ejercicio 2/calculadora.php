<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>


<form action="calculadora.php" method="post">

    <label for="n1" name="n1">Numero 1: </label><input name="n1" type="number"><br><br>
    <label for="n2" name="n2">Numero 2: </label><input name="n2" type="number"><br><br>
    <button type="submit">Enviar</button>

</form>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        $suma = $n1 + $n2;

        echo "La suma es $suma";
    }

?>
    
</body>
</html>