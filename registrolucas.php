
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

<!-- NAV -->
<div class="menu">
    <img style="width:103px; height:66px;" src="images/logo.jpg" alt="" class="logo">
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sesion.php">Iniciar Sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="preguntasfrecuentes.php">Faq</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro.php">Registrarme</a>
        </li>
    </ul>
    <div class="icono-carrito">
      <img src="images/carrito-icono.png" alt="Mis Compras">
    </div>

    <a href='sesion.php'><img src="images/avatar.png" style='widht:4vw; height:4vh;'> Login</a>

  </div>
<!-- FIN NAV -->

<?php
include 'funcioneslucas.php';

if ($_POST){
  $errores = validate($_POST);

  if(count($errores) == 0){
    $usuario = createuser($_POST);
    saveuser($usuario);
    header('Location: sesion.php');
  }
}
?>


<div class="container-fluid">

  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <h2>Ingrese sus datos para registrarse</h2>
    </div>
  </div>
  <form method='post' action=''>
    <div class="form-group">
      <input type="text" class="form-control"  placeholder="Nombre y Apellido" name='nombre' value='<?=!isset($errores['nombre']) ? old('nombre') : "" ?>'>
      <small id="passwordHelp" class="text-danger"> <?php if(isset($errores['nombre'])): echo $errores['nombre']; endif; ?> </small>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" placeholder="Nombre de usuario" name='usuario' value='<?=!isset($errores['usuario']) ? old('usuario') : "" ?>'>
      <small id="passwordHelp" class="text-danger"> <?php if(isset($errores['usuario'])): echo $errores['usuario']; endif; ?> </small>
    </div>

	  <div class="form-group">
    	<div class="controls">
    		<select class='form-control' name="sexo" placeholder="Ingrese email">
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
      <label id="browsebutton" class="btn btn-default input-group-addon" for="my-file-selector" style="background-color:lightblue">
        <input id="my-file-selector" type="file" style="display:none;">Browse...
      </label>
        <input name='foto' type="text" class="form-control" readonly="" placeholder="Insertar foto de perfil (opcional)" value=''>
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