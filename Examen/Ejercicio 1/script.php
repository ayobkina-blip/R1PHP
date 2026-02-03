
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $lastName = $_POST['last_name'];
    $dni = $_POST['dni'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    while(true){
        if(empty($name) || empty($lastName) || empty($dni) || empty($phone) || empty($email)) {
            echo "No pueden haber campos vacios";
            break;
        }
        if(!is_string($name)){
            echo "El campo nombre no es valido";
            break;
        }elseif(!is_string($lastName)){
            echo "El campo apellidos no es valido";
            break;
        }elseif(!is_string($dni)){
            echo "El campo DNI no es valido";
            break;
        }elseif(is_integer($phone)){
            echo "El campo telefono no es valido";
            break;
        }elseif(strlen($phone) != 9) {
            echo "El campo telefono debe contener 9 numeros";
            break;
        }else{

            echo 'Registro completo';
            break;
        }

    }
    
    
    
}

?>