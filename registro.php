<?php
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
                      // QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP

include 'helpers.php'; // ACÁ HAY FUNCIONES COMO EL ODL()     



if ($_POST){
  $errores = $validator->regValidate($_POST); // ACÁ VALIDO LOS ERRORES CON LA INSTANCIA '$validator' DE LA CLASE 'VALIDATOR.PHP' HECHA EN 'LOADER.PHP'
  if(count($errores) == 0) {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $genre = $_POST['sexo'];
    
    $pdo = Connector::make();
    $queryBuilder = new QueryBuilder($pdo);
    $queryBuilder->createUser($username, $email, $pass, $genre); // GUARDO EL USUARIO CON LA FUNCIÓN 'saveUser($usuario)' QUE ESTÁ DENTRO DE LA INSTANCIA '$usersDb' DE LA CLASE 'JSONDB.PHP' HECHA EN 'LOADER.PHP'
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
<?php ?>


    <div class="form-group">
      <input type="text" class="form-control"  placeholder="Nombre de usuario" name='username' value='<?=!isset($errores['username']) ? old('username') : "" ?>'>
      <small id="passwordHelp" class="text-danger"> <?php if(isset($errores['username'])): echo $errores['username']; endif; ?> </small>
    </div>

    <div class="form-group">
      <input type="email" class="form-control" aria-describedby="emailHelp" name='email' placeholder="Ingrese email" value='<?=!isset($errores['email']) ? old('email') : "" ?>'>
      <small id="passwordHelp" class="text-danger"> <?php if(isset($errores['email'])): echo $errores['email']; endif; ?> </small>
    </div>

	  <div class="form-group">
    	<div class="controls">
    		<select class='form-control' name='sexo' >
        <option disabled selected>Seleccione una opción</option>
          <option value='masculino'> Masculino </option>
          <option value='femenino'> Femenino </option>
          <option value='otro'> Otro </option>
        </select>
      </div>
    </div>


    <div class="form-group">
      <input type="password" class="form-control" placeholder="Password" name='password' value=''>
      <small id="passwordHelp" class="text-danger"> <?php if(isset($errores['password'])): echo $errores['password']; endif; ?> </small>
    </div>

    <div class="input-group">
      <!-- <label id="browsebutton" class="btn btn-default input-group-addon" for="my-file-selector" style="background-color:lightblue">
        <input id="my-file-selector" type="file" name = "foto" style="display:none;">Browse...
      </label> -->
    <input type="file" name='foto'>
        <?php if(isset($errores['foto'])) { ?>
				<span><?php echo "<br>".$errores['foto'] ?></span>
			<?php } ?>  
      <br>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="inputCheck" name='confirm'>
      <label class="form-check-label" for="inputCheck">Acepta los terminos y condiciones</label><br>
      <small id="passwordHelp" class="text-danger"> <?php if(isset($errores['confirm'])): echo $errores['confirm']; endif; ?> </small>
    </div>

      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn btn-primary">REGISTRARME</button>
        </div>
      
       </div>
       
        
      </div>
      
  </form>
</div>
  
<?php include_once('footer.php'); ?>

</body>
</html>

