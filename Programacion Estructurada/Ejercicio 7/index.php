<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Calculadora basica</h1>

    <form action="index.php" method="post">

    <select name="opcion" id="opcion">
        <option value="1">Sumar</option>
        <option value="2">Restar</option>
        <option value="3">Multiplicar</option>
         <option value="4">Dividir</option>
    </select><br><br>

    <label for="n1">Numero 1</label><input name="n1" type="number"><br><br>
    <label for="n2">Numero 2</label><input name="n2" type="number"><br><br>

    <button type="submit">Enviar</button><br><br>

    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $res = 0;

        switch ($_POST['opcion']) {
            case 1:
                $res = $n1 + $n2;
                echo "La suma es : $res";
                break;
            case 2:
                $res = $n1 - $n2;
                echo "La resta es : $res";
                break;
            case 3:
                $res = $n1 * $n2;
                echo "La multiplicacion es : $res";
                break;
            case 4:
                $res = $n1 / $n2;
                echo "La division es : $res";
                break;
            
            default:
                # code...
                break;
        }
    }
    
    ?>
</body>
</html>