<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Factorial de un numero</h1>
    <form action="index.php" method="post">

    <label for="f">Factorial: </label>
    <input name="f" type="number"><br><br><button type="submit">Enviar</button><br><br>

    </form>
    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $f = $_POST['f'];
        $factorial = 1;
        for ($i = $f; $i >= 1; $i--) {
            
            $factorial = $factorial * $i;
        }
        echo "El factorial del numero es $factorial";
    }
    
    


    
    ?>
</body>
</html>