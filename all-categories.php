<?php
include 'classes/Categories.php';
include 'loader.php';

if ($_POST){
    $categoria = new Category ('', $_POST['name'], $_POST['description']);
    $db->guardarCategoria($categoria);
}


$categorias = $db->buscarDatos('categories');
require 'views/all-categories-view.php';