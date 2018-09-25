<?php
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
                      // QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP

include 'helpers.php'; // ACÁ HAY FUNCIONES COMO EL ODL()                   

if ($_POST){
    $producto = $productDb->userArrayProducto($_POST); // CREO UN PRODUCTO CON LA FUNCIÓN 'userArrayProducto($datos)' QUE ESTÁ DENTRO DE LA INSTANCIA '$productDb' DE LA CLASE 'JSONDB.PHP' HECHA EN 'LOADER.PHP'
    $usersDb->saveProduct($producto); // GUARDO EL PRODUCTO CON LA FUNCIÓN 'saveProduct($user)' QUE ESTÁ DENTRO DE LA INSTANCIA '$usersDb' DE LA CLASE 'JSONDB.PHP' HECHA EN 'LOADER.PHP'
  }
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
    <title>Subir producto</title>
</head>
<body>

<?php include_once('navbar.php'); ?>
<div class="container-fluid">

  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <h2>Subir el Producto</h2>
    </div>
  </div>
  <form method='post' action='' class='subir-producto'>
    <div class="form-group">
      <input type="text" class="form-control"  placeholder="ID" name='id'>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" placeholder="Nombre Producto" name='nombre'>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" aria-describedby="emailHelp" name='precio' placeholder="Precio">
    </div>

      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn btn-primary">GUARDAR PRODUCTO</button>
        </div>
      
       </div>
       
        
      </div>
      
  </form>
  
</div>

</body>
</html>

