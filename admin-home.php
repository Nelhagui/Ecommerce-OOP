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
    <title>Mi perfil</title>
</head>
<body>
    <?php include_once('navbar.php'); ?>

    <?php if(!$auth->check()):?>
            <div class="alert alert-danger" role="alert">
                No estás autorizado/a en esta sección <a href="registro.php" class="alert-link">Registrate</a> o <a href="sesion.php" class="alert-link">Iniciá Sesión</a>
            </div>
    <?php else: ?>

      <section class="jumbotron text-center">
          <div class="container">
            <h1 class="jumbotron-heading"><?="Bienvenido $username!" ?></h1>
            <p class="lead text-muted">Tu perfil es el de "Administrador" y estás autorizado a modificar los siguientes parámetros:</p>
            <p>
              <a href="all-users-admin.php" class="btn btn-primary my-2">USUARIOS</a>
              <a href="all-services-admin.php" class="btn btn-primary my-2">SERVICIOS ACTIVOS</a>
              <a href="all-categories-admin.php" class="btn btn-primary my-2">CATEGORÍAS</a>

            </p>
          </div>
        </section>

    <?php endif; ?>

<?php include_once('footer.php'); ?>

</body>
</html>