<?php
include 'loader.php';

if ($_POST){
    //   $errores = $validator->regValidate($_POST); // ACÁ VALIDO LOS ERRORES CON LA INSTANCIA '$validator' DE LA CLASE 'VALIDATOR.PHP' HECHA EN 'LOADER.PHP'
    //   if(count($errores) == 0) {
        
        $name = $_POST['name'];
        $descripcion = $_POST['descripcion'];
        
        $queryBuilder = new QueryBuilder($pdo);
        $queryBuilder->createCategory($name, $descripcion);
    //   }
    }


// $pdo = Connector::make(); // agrego los datos de conección a la base de datos a la variable $pdo
$queyBuilder = new QueryBuilder ($pdo); // creo una instancia del clase QueryBuilder 
                                        //que tiene funciones de consultas para la base y por eso le paso
                                        //la variable $pdo que tiene datos de acceso

$categorias = $queyBuilder->index('categories'); // utilizo la función que busca en la tabla 'users' y lo cargo a una variable 
                                        // que voy a utilizar en all-users-view.php
require 'views/all-categories-view.php';