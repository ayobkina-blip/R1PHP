
<?php   

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_FILES['file']){
    $file = $_FILES['file'];
    $lr = '';
    $carpeta = '../pruebas/';

    if($file['error'] === UPLOAD_ERR_OK){

        $nombreFichero = uniqid(). '-'. basename($file['name']);
        $ruta = $carpeta.$nombreFichero;

        if(move_uploaded_file($file['tmp_name'], $ruta)){
            $lr = 'El fichero se a subido';
        }

    }else{
        $lr = 'error en la subida del archivo';
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

<form action="index.php" method="post" enctype="multipart/form-data">

    <input type="file" name="file" placeholder="Fichero...">

    <br><br><button type="submit">Enviar</button>

    <?php echo $lr?>

</form>
    
</body>
</html>