<?php
include 'classes/Services.php';
include 'loader.php';
include 'helpers.php';



if ($_POST){
        $servicio = new Service ('', $_POST['category'], $_POST['user'], $_POST['price'], $_POST['name'], $_POST['description'], '', '' );
        $db->guardarServicio($servicio);
    }

$categorias = $db->buscarDatos('categories');
$usuarios = $db->buscarDatos('users');
$servicios = $db->buscarDatos('services');

require 'views/all-services-view.php';