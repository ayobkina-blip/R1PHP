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
        $pal = strtolower($pal);
        $conteo = strlen($pal);
        $n = 0;
        for($i = 0; $i < $conteo; $i++){
            if($pal[$i]=='a' || $pal[$i]=='e' || $pal[$i]=='o' || $pal[$i]=='i' || $pal[$i]=='u'){
                $n++;
            }
        }
        echo "Contiene una cantidad de vocales: $n";
    }

    ?>
</body>
</html>