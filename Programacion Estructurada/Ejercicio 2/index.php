<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <h1>Par o Impar</h1>

    <form action="index.php" method="post">

    <label for="num">Numero:</label><input name="num" type="number">
    <br><br>
    <button type="submit">Enviar</button><br><br>

    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $num = $_POST['num'];

            $esPar = ($num % 2 == 0);

            if($esPar){
                echo "El numero $num es par";
            }else{
                echo "El numero $num no es par";
            }
        }
    
    
    ?>
    
</body>
</html>