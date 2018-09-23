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
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/estilos.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
  <title>Formulario</title>
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
      <input type="text" class="form-control"  placeholder="Nombre" name='nombre' value='<?=!isset($errores['nombre']) ? old('nombre') : "" ?>'>
      <small id="passwordHelp" class="text-danger"> <?php if(isset($errores['nombre'])): echo $errores['nombre']; endif; ?> </small>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" placeholder="Nombre de usuario" name='usuario' value='<?=!isset($errores['usuario']) ? old('usuario') : "" ?>'>
      <small id="passwordHelp" class="text-danger"> <?php if(isset($errores['usuario'])): echo $errores['usuario']; endif; ?> </small>
    </div>

	  <div class="form-group">
    	<div class="controls">
    		<select class='form-control' name="sexo" >
        <option disabled selected>Seleccione una opción</option>
          <option value='masculino'> Masculino </option>
          <option value='femenino'> Femenino </option>
          <option value='otro'> Otro </option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <input type="email" class="form-control" aria-describedby="emailHelp" name='email' placeholder="Ingrese email" value='<?=!isset($errores['email']) ? old('email') : "" ?>'>
      <small id="passwordHelp" class="text-danger"> <?php if(isset($errores['email'])): echo $errores['email']; endif; ?> </small>
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
  

</body>
</html>

