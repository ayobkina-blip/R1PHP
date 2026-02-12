<?php

require 'SimpleValidator.php';
/*
$data = [
    'username' => 'user1234',
    'email' => 'emailNoValido',
    'password' => 'password',
    'zip_code' => 46680
];

$rules = [
    'username' => 'required',
    'email' => 'required|email',
    'password' => 'required|password_strong',
    'zip_code' => 'required|zip_code'
];

$validator = new SimpleValidator($data, $rules);

if($validator->validate()){

    echo "<p style='color:green'>Datos procesados correctamente</p>";
}else{
    $validation_errors = $validator->getErrors();
    echo '<h2>Errores de validacion</h2>';
    echo '<pre>';
    print_r($validation_errors);
    echo '</pre>';
}
*/

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mensajeCorrecto = '';

    $data = [
        'username' => $name,
        'email' => $email,
        'password' => $password
    ];

    $rules = [
        'username' => 'required',
        'email' => 'required|email',
        'password' => 'required|password_strong'
    //'zip_code' => 'required|zip_code'
    ];

    $validatos = new SimpleValidator($data, $rules);

    if($validator->$validate()){

        $mensaje = '<p class="green">Nueva cuenta creada</p>';

    }else{
        $validation_errors = 
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            align-content: space-around;
            align-items: center;
            justify-content: center;
        }
        input{
            margin: 20px;
            width: 190px;
            height: 30px;
        }
        button{
            width: 80px;
            height: 50px;
        }
    </style>
</head>
<body>
    
    <form action="index.php" method="post">
    <h1>Register</h1>
    <input type="text" name="username" placeholder="Usuario...">
    <input type="text" name="email" placeholder="Correo electronico...">
    <input type="text" name="password" placeholder="Password...">

    <?php echo $mensajeCorrecto ?? $mensajeError?>

    <button type="submit">Crear cuenta nueva</button>

    </form>
</body>
</html>