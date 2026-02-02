<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>

    <form action="index.php" method="post">

    <label for="num">Introduce un numero:</label><input name="num" type="number">
    <br><br><button type="submit">Enviar</button><br><br>

    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $num = $_POST['num'];

        $table = '<table border=1>';
        $table .= '<tr><th>Multiplicador</th><th>Multiplicando</th><th>Resultado</th></tr>';
        for($i = 1; $i < 11; $i++){
            $r = 0;
            $r = $num * $i;
            $table .= "<tr><td>$num</td><td>$i</td><td>$r</td></tr>";
        }
        $table .= '</table>';

        echo $table;
    }

    ?>

</body>
</html>