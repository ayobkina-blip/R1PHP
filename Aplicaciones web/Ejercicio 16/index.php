<?php

require 'SimpleValidator.php';

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


?>