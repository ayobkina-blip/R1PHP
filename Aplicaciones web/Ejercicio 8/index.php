
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = '';
    $email = $_POST['email'];
    $lr = '';
    if(!empty($email)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){//Para validar el email

            $lr = "El email esta bien echo";

        }else{
            $lr = "El email no esta bien echo";
        }
    }else{
        $lr = 'El campo email esta vacio';
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

    <input type="text" name="email" id="" placeholder="Email..."><br><br><button type="submit">Enviar</button>

    <?php echo $lr;?>
    

    </form>
</body>
</html>