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
    <title>Todos los Usuarios</title>
</head>
<body>
    <?php include_once('navbar.php'); ?>
    <ul>
        <?php foreach($usuarios as $usuario): ?>
            <li><?=$usuario['username']; ?></li>
        <?php endforeach ?>
    </ul>

<body>
    <p>Hola</p>
</body>
</html>