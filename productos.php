<?php
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
                      // QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP

include 'helpers.php'; // ACÁ HAY FUNCIONES COMO EL ODL()                   

if ($_POST){
  $errores = $validator->regValidate($_POST); // ACÁ VALIDO LOS ERRORES CON LA INSTANCIA '$validator' DE LA CLASE 'VALIDATOR.PHP' HECHA EN 'LOADER.PHP'
  if(count($errores) == 0) {
    $usuario = $usersDb->userArray($_POST); // CREO UN USUARIO CON LA FUNCIÓN 'userArray($datos)' QUE ESTÁ DENTRO DE LA INSTANCIA '$usersDb' DE LA CLASE 'JSONDB.PHP' HECHA EN 'LOADER.PHP'
    $usersDb->saveUser($usuario); // GUARDO EL USUARIO CON LA FUNCIÓN 'saveUser($usuario)' QUE ESTÁ DENTRO DE LA INSTANCIA '$usersDb' DE LA CLASE 'JSONDB.PHP' HECHA EN 'LOADER.PHP'
    redirect('sesion.php'); // SI PASA LA VALIDACIÓN Y GUARDA EL USUARIO LO ENVÍO A INICIAR SESIÓN. 
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
    <title>Formulario de registro</title>
</head>
<body>

<?php include_once('navbar.php'); ?>
<div class="container-fluid">

  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <h2>Ingrese sus datos para registrarse</h2>
    </div>
  </div>
  <form method='post' action=''>
    <div class="form-group">
      <input type="text" class="form-control"  placeholder="ID" name='id'>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" placeholder="Nombre Producto" name='nombre'>
    </div>

    <div class="form-group">
      <input type="email" class="form-control" aria-describedby="emailHelp" name='precio' placeholder="Precio">
    </div>

    <div class="form-group">
      <input type="password" class="form-control" placeholder="Password" name='password' value=''>
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

