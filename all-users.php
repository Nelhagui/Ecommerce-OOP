<?php
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
// QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP
include 'helpers.php'; // ACÁ HAY FUNCIONES COMO EL ODL()     

$pdo = Connector::make(); // agrego los datos de conección a la base de datos a la variable $pdo
$queyBuilder = new QueryBuilder ($pdo); // creo una instancia del clase QueryBuilder 
                                        //que tiene funciones de consultas para la base y por eso le paso
                                        //la variable $pdo que tiene datos de acceso

$usuarios = $queyBuilder->index('users'); // utilizo la función que busca en la tabla 'users' y lo cargo a una variable 
                                        // que voy a utilizar en all-users-view.php
require 'views/all-users-view.php';