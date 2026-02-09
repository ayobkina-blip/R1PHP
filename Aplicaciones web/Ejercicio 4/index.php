<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $lr = '';

    if(empty($name) || empty($email) || empty($message)){
        $lr = '<p style = "color:red;">No pueden haber campos vacios</p>';
    }else{
        $lr = '<p style = "color:green;">Usted completo el formulario</p>';
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

    <?php echo $lr;?>
    
<form action="index.php" method="post">
    <input type="text" name="name" placeholder="Nombre..."><br><br>
    <input type="text" name="email" placeholder="Email..."><br><br>
    <input type="text" name="message" placeholder="Mensaje..."><br><br>
    <button type="submit">Enviar</button>
</form>

</body>
</html>