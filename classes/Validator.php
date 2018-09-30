<?php

class Validator
{
    public static function regValidate($data)
    {
        $errors = [];

        $username = trim($data['username']);
        if($username == "") {
            $errors['username'] = "Debes ingresar un username";
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
        $username = $usersDb->dbEmailSearch($_POST['email']);
        $email = trim($data['email']);

        if($email == ''){
            $errores['email'] = 'Debes ingresar un Email';
        } else if($username == null){
            $errores['email'] = 'El Email ingresado no es valido';
        }
        
        if($data['password'] == ''){
            $errores['password'] = 'Debes ingresar una password';
        } else if(password_verify($_POST['password'], $username['password']) !== true){
            $errores['password'] = 'password o email erróneo';
        }

        return $errores;
    }
}