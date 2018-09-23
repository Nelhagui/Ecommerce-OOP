<?php

class Validator
{
    public static function regValidate($data)
    {
        $errors = [];

        $nombre = trim($data['nombre']);
        if($nombre == "") {
            $errors['nombre'] = "Debe ingresar un nombre";
        }


        $usuario = trim($data['usuario']);
        if($usuario == "") {
            $errors['usuario'] = "Debe ingresar un usuario";
        }

        $email = trim($data['email']);

        if($email == "") {
            $errors['email'] = "Debe ingresar un email";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Ingrese un email válido";
        }

        $password = trim($data['password']);
        
        if($password == "") {
            $errors['password'] = "Debe ingresar una contraseña";
        } elseif($password < 4) {
            $errors['password'] = "La contraseña debe ser de al menos 4 caracteres";
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