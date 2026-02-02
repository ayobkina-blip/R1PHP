<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Contar letras</h1>
    <form action="index.php" method="post">

    <label for="pal">Palabra: </label><input name="pal" type="text">
    <br><br><button type="submit">Enviar</button><br><br>

    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pal = $_POST['pal'];
        $conteo = strlen($pal);
        echo "La palabra contiene $conteo letras";
    }

    ?>
</body>
</html>