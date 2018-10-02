<?php

class Connector 
{
    public static function make() 
    {
            try{
                $db = new PDO("mysql:host=localhost;dbname=ecommerce;port=3306", "root", "12345");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

                return $db;
            
            } catch (PDOException $e){
                echo $e->getMessage();
            }    
    }
}

