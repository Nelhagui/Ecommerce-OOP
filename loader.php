<?php

require 'classes/Connector.php'; //tiene datos de conexion a db
require 'classes/QueryBuilder.php'; // tiene funciones queries para consultar, borrar, subir, etc.
require 'classes/MySQLDB.php'; //

require 'classes/User.php'; // ESTA CLASE CREA LOS USUARIOS CON SUS ATRIBUTOS
require 'classes/Validator.php'; // ESTA CLASE VALIDA LOS DATOS DE REGISTRO Y LOS DE LOGIN
require 'classes/Auth.php'; // ESTA CLASE ES PARA LOGIN Y LOGOUT - SESSION Y COOKIES
require 'classes/Recordar.php';// ESTA CLASE ES PARA RECORDAR EL USUARIO

// crear variable con datos de conexion
$pdo = Connector::make();
$usersDb = new MySQLDB($pdo);

// CREANDO UNA INSTANCIA DEL VALIDADOR DE DATOS
$validator = new Validator();

// CREANDO UNA INSTANCIA DEL LOGIN-LOGOUT
$auth = new Auth();

// CREANDO UNA INSTANCIA PARA RECORDAR USUARIO
$recordar = new Recordar();
