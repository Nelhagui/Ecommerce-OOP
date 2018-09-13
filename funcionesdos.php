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

        // Validacion imagen
        if ($_FILES['foto']["error"] == UPLOAD_ERR_OK) {
            $nombre = $_FILES['foto']["name"];
            $archivo = $_FILES['foto']["tmp_name"];
    
            $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    
            if ($ext != "png" && $ext != "jpg") {
               // $errores['foto'] = "La foto debe tener los formatos JPG ó PNG";
            }
            else {
                
                $miArchivoDestino = dirname(__DIR__);
                $miArchivoDestino = $miArchivoDestino . "/img/";
                $miArchivoDestino = $miArchivoDestino . $_POST["nombre"] . "." . $ext;
    
                move_uploaded_file($archivo, $miArchivoDestino);
            }
        } else{
            $errores['foto'] = "Disculpe debe seleccionar una imagen...";
        }

        return $errores;
    }

    function createuser($datos){
        $usuario = [
            "nombre" => $datos["nombre"],
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
?>
 
