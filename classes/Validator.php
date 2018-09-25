<?php

class Validator
{
    public static function regValidate($data)
    {
        $errors = [];

        $nombre = trim($data['nombre']);
        if($nombre == "") {
            $errors['nombre'] = "Debes ingresar un nombre";
        }


        $usuario = trim($data['usuario']);
        if($usuario == "") {
            $errors['usuario'] = "Debes ingresar un usuario";
        }

        $email = trim($data['email']);

        if($email == "") {
            $errors['email'] = "Debes ingresar un email";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Ingrese un email válido";
        }

        $password = trim($data['password']);
        
        if($password == "") {
            $errors['password'] = "Debes ingresar una contraseña";
        } elseif($password < 4) {
            $errors['password'] = "La contraseña debe ser de al menos 4 caracteres";
        }


        if(!isset($data['confirm'])) {
            $errors['confirm'] = "Debes aceptar terminos y condiciones";
        }

        return $errors;

    }

    public function loginValidate($data) // AGREGO UN VALIDADOR DE LOGIN
    {
        $usersDb = new JSONDB("users.json");
        $errores = [];
        $usuario = $usersDb->dbEmailSearch($_POST['email']);
        $email = trim($data['email']);

        if($email == ''){
            $errores['email'] = 'Debes ingresar un Email';
        } else if($usuario == null){
            $errores['email'] = 'El Email ingresado no es valido';
        }
        
        if($data['password'] == ''){
            $errores['password'] = 'Debes ingresar una password';
        } else if(password_verify($_POST['password'], $usuario['password']) !== true){
            $errores['password'] = 'La password es incorrecta';
        }

        return $errores;
    }
}