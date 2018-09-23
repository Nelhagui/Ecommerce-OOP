<?php

class Validator
{
    public static function regValidate($data)
    {
        $errors = [];

        $username = trim($data['username']);
        if($username == "") {
            $errors['username'] = "Capo me dejaste el username vacio";
        }

        $email = trim($data['email']);

        if($email == "") {
            $errors['email'] = "Me dejaste el email vacio!";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "El email no es valido, crack";
        }

        $password = trim($data['password']);
        $cpassword = trim($data['cpassword']);
        
        if($password == "") {
            $errors['password'] = "Me dejaste la pass vacia!";
        } elseif($password < 4) {
            $errors['password'] = "La pass debe ser de al menos 4 caracteres!";
        }

        if($password != $cpassword) {
            $errors['cpassword'] = "Las contraseñas no coinciden";
        }

        if(!isset($data['confirm'])) {
            $errors['confirm'] = "Tenes que aceptar terminos y condiciones";
        }

        return $errors;

    }

    public function loginValidate()
    {
        //...
    }
}