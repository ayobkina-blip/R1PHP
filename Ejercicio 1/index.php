<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>1. Suma de dos numeros</h1>

    <form action="index.php" method="post">

    <label for="N1">Numero 1: </label>
    <input name="N1" type="number"><br><br>
    <label for="N2">Numero 2: </label>
    <input name="N2" type="number"><br><br>
    <button type="submit">Enviar</button><br><br>

    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $n1 = $_POST["N1"];
        $n2 = $_POST["N2"];

        $suma = $n1 + $n2;

        echo "La suma es $suma";
    }

    ?>
</body>
</html>