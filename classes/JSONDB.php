<?php

require 'DB.php';

class JSONDB extends DB
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }
    public function getFile()
    {
        return $this->file;
    }

    public function dbConnect()
    {
        $db = file_get_contents($this->getFile());
        $arr = explode(PHP_EOL, $db);
        array_pop($arr);

        foreach($arr as $user) {
            $usersArray[] = json_decode($user, true);
        }

        return $usersArray;
    }

    public function dbEmailSearch($email)
    {
        $users = $this->dbConnect();
        foreach($users as $user) {
            if($user['email'] === $email) {
                return $user;
            }
        }
        return null;
    }

    public function saveUser($user)
    {
        $jsonUser = json_encode($user);
        file_put_contents('users.json', $jsonUser . PHP_EOL, FILE_APPEND);
    }

    public function userArray($data)
    {
        $usuario = [
            'nombre' => $data['nombre'],
            'usuario' => $data['usuario'],
            'sexo' => $data['sexo'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
        
        ];

        $usuario['id'] = $this->idGenerate();

        return $usuario;

    }

    public function idGenerate()
    {
        $file = $this->dbConnect();

        if($file == "") {
            return 1;
        }

        $last = $file[count($file) - 1];
    
        return $last['id'] + 1;   
    }

}



