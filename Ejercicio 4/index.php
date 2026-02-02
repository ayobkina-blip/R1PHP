<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Numero mayor</h1>



    <form action="index.php" method="post">
        <label for="num1">Numero 1:</label><input name="num1" type="number"><br><br>
        <label for="num2">Numero 2:</label><input name="num2" type="number"><br><br>
        <button type="submit">Enviar</button><br><br>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if($num1 > $num2){
            echo "El numero $num1 es mayor que $num2";
        }elseif($num1 < $num2){
            echo "El numero $num2 es mayor que $num1";
        }else{
            echo "Los dos numeros son iguales";
        }
    }
    ?>
</body>
</html>