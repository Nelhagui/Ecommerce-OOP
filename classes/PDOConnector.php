<?php

class PDOConnector
{

    public static function make()
    {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=ecommerce;port=3306;charset=utf8mb4", "root", "12345");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            return $pdo;

        } catch (PDOException $e){
            echo $e->getMessage();
            //die('No pude conectarme');
        }
    }

}