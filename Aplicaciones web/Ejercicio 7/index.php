<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $asunto = $_POST['asunto'];
    $old_input = $asunto;
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
        <input type="text" name="asunto" placeholder="Asunto..." value="<?php echo $old_input?>"><br><br><button type="submit">Enviar</button>
    </form>
</body>
</html>