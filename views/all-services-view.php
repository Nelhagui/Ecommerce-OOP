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
    <title>Services - Admin</title>
</head>
<body>
    <?php include_once('navbar.php'); ?>
    <ul>
        <?php foreach($services as $service): ?>
            <li><?=$service['name']; ?></li>
        <?php endforeach ?>
    </ul>


    <div class="list-group">

        <?php foreach($services as $service): ?>
            <div class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small>3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small>Donec id elit non mi porta.</small>
            </div>
        <?php endforeach ?>
    </div>






</body>
    
</html>