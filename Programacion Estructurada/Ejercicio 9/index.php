<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Numero primo</h1>
    <form action="index.php" method="post">

    <input type="number" name="n"><br><br>

    <button type="submit">Enviar</button><br><br>
    </form>
    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $n = $_POST['n'];

        if($n%1 == 0){
            echo 'es primo';
        }else{
            echo 'no es primo';
        }

    }
    
    ?>
</body>
</html>