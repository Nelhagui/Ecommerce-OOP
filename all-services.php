<?php
require 'DB/Connector.php';
require 'DB/QueryBuilder.php';


if ($_POST){
    //   $errores = $validator->regValidate($_POST); // ACÁ VALIDO LOS ERRORES CON LA INSTANCIA '$validator' DE LA CLASE 'VALIDATOR.PHP' HECHA EN 'LOADER.PHP'
    //   if(count($errores) == 0) {
        $iduser = $_POST ['user'];
        $idcategory = $_POST ['category'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $pdo = Connector::make();
        $queryBuilder = new QueryBuilder($pdo);
        $queryBuilder->createService($idcategory, $iduser, $price, $name, $description);
    //   }
    }




$pdo = Connector::make(); // agrego los datos de conección a la base de datos a la variable $pdo
$queyBuilder = new QueryBuilder ($pdo); // creo una instancia del clase QueryBuilder 
                                       //que tiene funciones de consultas para la base y por eso le paso
                                        //la variable $pdo que tiene datos de acceso
$categorias = $queyBuilder->index('categories');
$users = $queyBuilder->index('users');
                                    
$services = $queyBuilder->index('services'); // utilizo la función que busca en la tabla 'users' y lo cargo a una variable 
                                        // que voy a utilizar en all-users-view.php
require 'views/all-services-view.php';