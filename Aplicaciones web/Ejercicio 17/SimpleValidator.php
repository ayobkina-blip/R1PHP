<?php

class SimpleValidator
{
    protected $errors = [];
    protected $reglas;
    protected $datos;

    public function __construct(array $datos, array $reglas) {
        $this->datos = $datos;
        $this->reglas = $reglas;
    }
    
    public function validate(): bool{

        foreach ($this->reglas as $nombreRegla => $reglasString) {
            $reglas = explode('|', $reglasString);
            $valor = $this->datos[$nombreRegla] ?? null;

            foreach ($reglas as $regla) {

                //Validamos todas las reglas
                if($regla === 'required' && empty($valor)){

                    $this->addError($nombreRegla, "El campo $nombreRegla es obligatorio");
                    continue;
                    
                }

                //Validamos email
                if($regla === 'email' && !filter_var($valor, FILTER_VALIDATE_EMAIL)){
                    $this->addError($nombreRegla, "El formato del campo $nombreRegla no es valido-> ");
                    continue;
                }

                //Regex 
                if($regla === 'password_strong' && !preg_match('/[A-Z]/', $valor)){
                    $this->addError($nombreRegla, "La contraseña debe contener minimo una mayuscula");
                }
            }

        }

    return empty($this->errors);        

    }
    protected function addError(string $nombreRegla, string $message): void
    {
        if(!isset($this->errors[$nombreRegla])){
            $this->errors[$nombreRegla] = $message;
        }
    }
    public function getErrors(): array{
        return $this->errors;
    }
}


?>