<?php
include 'DB.php';
class MySQLDB extends DB
{
    private $pdo;
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function dbConnect()
    {

    }

    public function dbEmailSearch($email)
    {

    }

    public function saveUser($user)
    {
        
    }

}