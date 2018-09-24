<?php
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
    // QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP

include 'helpers.php'; // ACÁ HAY FUNCIONES COMO EL ODL()                   
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
    <title>Mi perfil</title>
</head>
<body>
    <?php include_once('navbar.php'); ?>

    <?php if(!$auth->check()):?>
            <div class="alert alert-danger" role="alert">
                No estás autorizado/a en esta sección <a href="registro.php" class="alert-link">Registrate</a> o <a href="sesion.php" class="alert-link">Iniciá Sesión</a>
            </div>
    <?php else: ?>
            <?php echo "Hola, estás en mi perfil" ?>
    <?php endif; ?>

</body>
</html>