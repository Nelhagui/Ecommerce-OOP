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

    <div class="list-categories">
        <div class="list-group">
            <?php foreach($services as $service): ?>

                <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?=$service['name']; ?></h5>
                    </div>
                    <p class="mb-1"><?=$service['description']; ?></p>

                </div>
            <?php endforeach ?>
        </div>
    </div>






</body>
    
</html>