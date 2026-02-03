<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Conversor de temperatura</h1>
    <form action="index.php" method="post">

    <label for="n">Celsius: </label><input name="n" type="number"><br><br>
    <button type="submit">Enviar</button><br><br>

    </form>
    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $n = $_POST['n'];

        $far = $n * 9/5 + 32;

        echo "Los grados celsius $n son igual a $far farenheit";
    }
    
    ?>
</body>
</html>