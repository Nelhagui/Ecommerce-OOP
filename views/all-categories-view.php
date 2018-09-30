<?php
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
    // QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP

if($auth->check()) {
      $name  = $_SESSION['logged'];
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


        <div class="container-fluid"> 
        <div class="row">
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

    <?php include_once('footer.php'); ?>


</body>
    
</html>