<?php

// require 'classes/QueryBuilder.php'; // tiene funciones queries para consultar, borrar, subir, etc.
require 'classes/MySQLDB.php'; //
require 'classes/Validator.php'; // ESTA CLASE VALIDA LOS DATOS DE REGISTRO Y LOS DE LOGIN
require 'classes/Auth.php'; // ESTA CLASE ES PARA LOGIN Y LOGOUT - SESSION Y COOKIES
require 'classes/Recordar.php';// ESTA CLASE ES PARA RECORDAR EL USUARIO
// require 'classes/PDOConnector.php';


// INSTANCIAS PARA LA LÓGICA DE SESION Y REGISTRO
$db = new MySQLDB();

$auth = new Auth();
$validator = new Validator();
$recordar = new Recordar();
