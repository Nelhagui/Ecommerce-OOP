<?php
require 'DB/Connector.php';
require 'DB/QueryBuilder.php';

$pdo = Connector::make(); // agrego los datos de conección a la base de datos a la variable $pdo
$queyBuilder = new QueryBuilder ($pdo); // creo una instancia del clase QueryBuilder 
                                        //que tiene funciones de consultas para la base y por eso le paso
                                        //la variable $pdo que tiene datos de acceso

$categorias = $queyBuilder->index('categories'); // utilizo la función que busca en la tabla 'users' y lo cargo a una variable 
                                        // que voy a utilizar en all-users-view.php
require 'views/all-categories-view.php';