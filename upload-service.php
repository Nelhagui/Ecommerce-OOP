<?php
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
                      // QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP
include 'helpers.php'; // ACÁ HAY FUNCIONES COMO EL ODL()                   

if ($_POST){
  var_dump($_POST);
  }

  if ($_POST){
    //   $errores = $validator->regValidate($_POST); // ACÁ VALIDO LOS ERRORES CON LA INSTANCIA '$validator' DE LA CLASE 'VALIDATOR.PHP' HECHA EN 'LOADER.PHP'
    //   if(count($errores) == 0) {
        $iduser = $_POST ['user'];
        $idcategory = $_POST ['category'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $queryBuilder = new QueryBuilder($pdo);
        $queryBuilder->createService($idcategory, $iduser, $price, $name, $description);
    //   }
    }


$pdo = Connector::make();
$queyBuilder = new QueryBuilder ($pdo);
$categorias = $queyBuilder->index('categories');
$users = $queyBuilder->index('users');
  
require 'views/upload-service-view.php';
include_once('footer.php');






