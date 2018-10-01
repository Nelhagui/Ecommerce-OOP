<?php
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
                      // QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP

include 'helpers.php'; // ACÁ HAY FUNCIONES COMO EL ODL()                   
require 'DB/Connector.php';
require 'DB/QueryBuilder.php';

// if ($_POST){
//     $producto = $productDb->userArrayProducto($_POST); // CREO UN PRODUCTO CON LA FUNCIÓN 'userArrayProducto($datos)' QUE ESTÁ DENTRO DE LA INSTANCIA '$productDb' DE LA CLASE 'JSONDB.PHP' HECHA EN 'LOADER.PHP'
//     $usersDb->saveProduct($producto); // GUARDO EL PRODUCTO CON LA FUNCIÓN 'saveProduct($user)' QUE ESTÁ DENTRO DE LA INSTANCIA '$usersDb' DE LA CLASE 'JSONDB.PHP' HECHA EN 'LOADER.PHP'
//   }
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
        // $urlimage = $_POST[NULL];
        // $urlvideo = $_POST[NULL];

        
        $pdo2 = Connector::make();
        $queryBuilder = new QueryBuilder($pdo2);
        $queryBuilder->createService($idcategory, $iduser, $price, $name, $description);
    //   }
    }


$pdo = Connector::make();
$queyBuilder = new QueryBuilder ($pdo);
$categorias = $queyBuilder->index('categories');
$users = $queyBuilder->index('users');
  
require 'views/upload-service-view.php';
include_once('footer.php');






