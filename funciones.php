<?php

function crearUsuario($datos)
    {
        $usuario = [
            'dni' => $datos['dni'],
            'email' => $datos['email'],
            'password' => password_hash($datos['password'], PASSWORD_DEFAULT),
            'edad' => $datos['edad'],
            'terminos' => $datos['terminos']
        ];

        $usuario['id'] = idGenerate();

        return $usuario;
    }


function idGenerate()
{
    $file = file_get_contents('usuarios.json');

    if($file == ""){
        return 1;
    }
    
    $usuarios = explode(PHP_EOL, $file);
    array_pop($usuarios);

    $ultimoUsuario = $usuarios[count($usuarios) - 1];
    $ultimoUsuario = json_decode($ultimoUsuario, true);

    return $ultimoUsuario["id"] + 1;

}

function guardarUsuario($usuario) 
    {
        $jsonUsuario = json_encode($usuario);
        file_put_contents('usuarios.json', $jsonUsuario . PHP_EOL, FILE_APPEND);
    }