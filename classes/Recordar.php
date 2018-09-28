<?php
class Recordar{
    public static function recordarUsuario(){ // SI ESTA SELECCIONADO RECORDARME CREA UNA COOKIE, Y SI NO Y YA HAY UNA COOKIE, LA DESTRUYE
        if(isset($_POST['recordarme'])){
            $usuario = $_POST['email'];
            $password = $_POST['password'];
            setcookie('email',$usuario,time() + 3600);
            setcookie('password',$password,time() + 3600);
        } else if(!isset($_POST['recordarme'])){
            if(isset($_COOKIE['password']) && isset($_COOKIE['email'])){
            setcookie('email','',time() - 3600);
            setcookie('password','',time() - 3600);
            }
        }
    }

    public function recordarPass(){ // SE ACUERDA DE LA PASSWORD SI HAY UNA COOKIE
        if(!$_POST && isset($_COOKIE['password'])){
            echo $_COOKIE['password'];
        }
    }

    public function recordarEmail(){ // PERSISTENCIA Y COOKIES
        if(!$_POST && isset($_COOKIE['email'])){
            echo $_COOKIE['email'];
         } else if(!isset($errores['email'])){
             echo old('email');
         }
    }
}
?>