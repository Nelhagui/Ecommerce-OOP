<?php
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
    // QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP

if($auth->check()) {
      $username  = $_SESSION['logged'];
}

include 'helpers.php'; // ACÁ HAY FUNCIONES COMO EL ODL()                   
?>



<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
    <title>Categorías - Admin</title>
</head>
<body>
    <?php include_once('navbar.php'); ?>
    <ul>
        <?php foreach($categorias as $categoria): ?>
            <li><?=$categoria['name']; ?></li>
        <?php endforeach ?>
    </ul>

</body>
    
</html>