<?php
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
    // QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP

if($auth->check()) {
      $name  = $_SESSION['logged'];
}
include 'helpers.php'; // ACÁ HAY FUNCIONES COMO EL ODL()   

?>

<!DOCTYPE html>
<html lang="es">
<?php include 'head.php'?>
    <title>Categorías - Admin</title>
</head>
<body>
    <?php include_once('navbar.php'); ?>
    <?php include_once('nav-admin.php'); ?>



<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="list-categories">
                <div class="list-group">
                    <?php foreach($categorias as $categoria): ?>
    
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?=$categoria['name']; ?></h5>
                            </div>
                            <p class="mb-1"><?=$categoria['description']; ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-categories">
                <form class="form-signin" action="" method="post">
                    <h2>Agregar Categoría</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='name' placeholder="Ingresar nombre de Categoría">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="comment" placeholder='Ingresar una descripción' name='descripcion'></textarea>
                    </div>                
                    <button type="submit" class="btn btn-primary">Agregar Categoría</button>
                </form>
            </div>
        </div>
    </div>
</div>


    <?php include_once('footer.php'); ?>


</body>
    
</html>