<?php
include 'DB.php';
class MySQLDB extends DB
{
    private $pdo;
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


//no se usa la función dbConnect(), viene heredado de DB.php
//fue remplazada por la clase Connector.php
public function dbConnect(){}

    public function dbEmailSearch($email)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = $email");
        $stmt->execute();
        

    }

    public function saveUser($user)
    {

    }

}