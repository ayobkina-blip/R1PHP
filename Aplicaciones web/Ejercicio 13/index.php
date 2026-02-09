
<?php   

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_FILES['file']){
    $file = $_FILES['file'];
    $lr = '';
    $carpeta = '../pruebas/';
    $size = 2 * 1024;
    $tipos = ['image/jpeg', 'image/png'];

    if($file['error'] === UPLOAD_ERR_OK){

        if(in_array($file['type'], $tipos)){
            if($file['size'] > $size){
            $nombreFichero = uniqid(). '-'. basename($file['name']);
            $ruta = $carpeta.$nombreFichero;

            if(move_uploaded_file($file['tmp_name'], $ruta)){
                $lr = $file;
                
            }
        }else{
            $lr = 'El fichero es pesado *1MB*';
        }

        }else{
            $lr = 'El tipo de archivo no es valido';
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

    <br><br><button type="submit">Enviar</button><br><br>

    <?php echo $lr['name'] . $lr['size']?>

</form>
    
</body>
</html>