<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pass = $_POST['password'];
    $lr = "";

    if(!empty($pass)){
        if(strlen($pass) >= 8){
            $lr = "El password es correcto";
        }else{
            $lr = "El password no puede tener menos de 8 caracteres";
        }

    }else{
        $lr = "El password no puede estar vacio";
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

    <input type="password" name="password" id="" placeholder="Contraseña"><br>
    <br><button type="submit">Enviar</button><br><br>

    <?php echo "<p>$lr</p>"?>

    </form>
</body>
</html>