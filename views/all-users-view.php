<?php

if($auth->check()) {
      $username  = $_SESSION['logged'];
}
?>




<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
    <title>Todos los Usuarios</title>
</head>
<body>
    <?php include_once('navbar.php'); ?>
    <?php include_once('nav-admin.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="list-categories">
                <div class="list-group">
                    <?php foreach($usuarios as $usuario): ?>
    
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?=$usuario['username']; ?></h5>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>