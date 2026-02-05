

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $post = $_POST['parametro'];
    echo "El parametro este es post --> $post";
}
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $get = $_GET['parametro'];
    echo "El parametro este es get --> $get";
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

<input type="text" name="parametro">
<button type="submit">Enviar</button>

</form>
    
</body>
</html>