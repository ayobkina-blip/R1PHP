<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $lr = '';
    $select = '';

    $select = $_POST['select'];
    htmlspecialchars($select);

    $paises = [
        1 => 'España',
        2 => 'USA',
        3 => 'Francia'
    ];

    foreach ($paises as $key => $value) {
        if($key == $select){
            $lr = 'El valor de la opcion seleccionada es '.$value;
        }
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

    <select name="select" id="">
        <option value="1">España</option>
        <option value="2">USA</option>
        <option value="3">Francia</option>
    </select>



    <br><br><button type="submit">Enviar</button>


    <?php echo $lr?>
</form>
    
</body>
</html>