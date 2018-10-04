<?php
include 'classes/Categories.php';
include 'loader.php';

// if ($_POST){
//     //   $errores = $validator->regValidate($_POST); // ACÁ VALIDO LOS ERRORES CON LA INSTANCIA '$validator' DE LA CLASE 'VALIDATOR.PHP' HECHA EN 'LOADER.PHP'
//     //   if(count($errores) == 0) {
        
//         $name = $_POST['name'];
//         $descripcion = $_POST['descripcion'];
        
//         $queryBuilder = new QueryBuilder($pdo);
//         $queryBuilder->createCategory($name, $descripcion);
//     //   }
//     }


$categorias = $db->buscarDatos('categories');
require 'views/all-categories-view.php';