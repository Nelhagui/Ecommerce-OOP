<?php
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
                      // QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP

include 'helpers.php'; // ACÁ HAY FUNCIONES COMO EL ODL()                   

// if ($_POST){
//     $producto = $productDb->userArrayProducto($_POST); // CREO UN PRODUCTO CON LA FUNCIÓN 'userArrayProducto($datos)' QUE ESTÁ DENTRO DE LA INSTANCIA '$productDb' DE LA CLASE 'JSONDB.PHP' HECHA EN 'LOADER.PHP'
//     $usersDb->saveProduct($producto); // GUARDO EL PRODUCTO CON LA FUNCIÓN 'saveProduct($user)' QUE ESTÁ DENTRO DE LA INSTANCIA '$usersDb' DE LA CLASE 'JSONDB.PHP' HECHA EN 'LOADER.PHP'
//   }

require 'DB/Connector.php';
require 'DB/QueryBuilder.php';
$pdo = Connector::make();
$queyBuilder = new QueryBuilder ($pdo);
$categorias = $queyBuilder->index('categories');
$users = $queyBuilder->index('users');
  
require 'views/upload-service-view.php';
include_once('footer.php');



