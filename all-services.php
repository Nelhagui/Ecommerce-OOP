<?php
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
// QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP

include 'helpers.php'; // ACÁ HAY FUNCIONES COMO EL ODL()     
$pdo = Connector::make(); // agrego los datos de conección a la base de datos a la variable $pdo
$queryBuilder = new QueryBuilder($pdo); // creo una instancia del clase QueryBuilder 
                                       //que tiene funciones de consultas para la base y por eso le paso
                                        //la variable $pdo que tiene datos de acceso


if ($_POST){
    //   $errores = $validator->regValidate($_POST); // ACÁ VALIDO LOS ERRORES CON LA INSTANCIA '$validator' DE LA CLASE 'VALIDATOR.PHP' HECHA EN 'LOADER.PHP'
    //   if(count($errores) == 0) {
        $iduser = $_POST ['user'];
        $idcategory = $_POST ['category'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $queryBuilder->createService($idcategory, $iduser, $price, $name, $description);
    //   }
    }




$categorias = $queryBuilder->index('categories');
$users = $queryBuilder->index('users');
                                    
$services = $queryBuilder->index('services'); // utilizo la función que busca en la tabla 'users' y lo cargo a una variable 
                                        // que voy a utilizar en all-users-view.php
require 'views/all-services-view.php';