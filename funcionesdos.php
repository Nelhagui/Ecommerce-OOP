<?php
session_start();
// Helpers! 
    function dd($var)
    {
        echo"<pre>";
        die(var_dump($var));
        echo "</pre>";
    }
    function old($user_input)
    {
        if (isset($_POST["$user_input"])) {
            return $_POST["$user_input"];
        }
    }
    //   /Helpers!
    // Validaciones
    
    function validate($datos){
        $errores = [];
        $usuario = trim($datos['usuario']);
        $email = trim($datos['email']);

        if($datos['nombre'] == ''){
            $errores['nombre'] = 'El campo Nombre y Apellido esta vacio*';
        }

        if($datos['email'] == ''){
            $errores['email'] = 'El campo Email esta vacio*';
        }

        if (strlen($datos['password']) <= 5) {
            $errores['password'] = "la Password tiene que tener minimo 6 caracteres*";
        }

        if(!isset($datos['confirm'])) {
            $errores['confirm'] = "Debe aceptar los terminos y condiciones*";
        }

        if($datos['usuario'] == ''){
            $errores['usuario'] = 'El campo nombre de Usuario esta vacio*';  
        } else if(strlen($datos['usuario']) > 14){
            $errores['usuario'] = 'El nombre de usuario debe tener maximo 14 caracteres*';
        }

        return $errores;
    }

    function createuser($datos){
        $usuario = [
            'nombre' => $datos['nombre'],
            'usuario' => $datos['usuario'],
            'email' => $datos['email'],
            'sexo' => $datos['sexo'],
            'password' => password_hash($datos['password'], PASSWORD_DEFAULT)
        ];
        $usuario['id'] = idGenerate();
        return $usuario;
    }

    function saveuser($usuario){
        $jsonUser = json_encode($usuario);
        file_put_contents('users.json', $jsonUser . PHP_EOL, FILE_APPEND);
    }

    function idgenerate(){
        $file = file_get_contents('users.json');
        if($file == ""){
            return 1;
        }
        
        $users = explode(PHP_EOL, $file);
        array_pop($users);
        $lastUser = $users[count($users) - 1];
        $lastUser = json_decode($lastUser, true);
        return $lastUser["id"] + 1;
    }

    function traertodalabase(){
        $basejson = file_get_contents('users.json');
        $users = explode(PHP_EOL, $basejson);
        array_pop($users);
        foreach($users as $user) {
            $arrayUsers[] = json_decode($user, true);
        }
        return $arrayUsers;
    }
    function buscameporemail($email)
    {
        $arrayDeUsuariosTraidos = traerTodaLabase();
        foreach($arrayDeUsuariosTraidos as $user) {
            if($user['email'] == $email) {
                return $user;
            }
        }
        return null;
    }

    function persistenciaYCookiesEmail(){
        if($_POST){
            $usuario = buscameporemail($_POST['email']);
            if($usuario !== null){
                echo $_POST['email'];
            }
        }
        if(!$_POST && isset($_COOKIE['email'])){
            echo $_COOKIE['email'];
        }
    }

    function persistenciaYCookiesPassword(){
        if(!$_POST){
            if(isset($_COOKIE["password"])){
                echo $_COOKIE["password"];
            }
        }
    }

    function recordarusuario(){
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

?>