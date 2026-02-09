<?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $c = $_POST['check'];

            if($c == 'on' || isset($c)){//Es lo mismo las condiciones
                $lr = '<p style="color:green">El check esta activo</p>';
            }else{
                $lr = '<p style="color:red">El check no esta activo</p>';
            }
        }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

    <input type="checkbox" name="check" id=""><label for="check">Este es el CheckBox</label><br><br>
    <button type="submit">Enviar</button>

    <?php
    
    echo $lr;
    
    ?>

    </form>

    
</body>
</html>