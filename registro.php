<?php
include 'helpers.php';    
include_once("loader.php");
require_once("classes/User.php");

//como solamente registro con email, creo variable vacia para llamarla en el Value del campo email del form
$emailDefault = "";

$errores = [];

if ($_POST) {
  $errores = $validator->validarInformacion($_POST, $db);


  if (!isset($errores["email"])) {
    $emailDefault = $_POST["email"];
  }

  if (count($errores) == 0) {
    $user = new User($_POST["username"], $_POST["email"], $_POST["password"], $_POST["genre"]) ;
    $user = $db->saveUser($user);
    $auth->login($_POST["email"]);
    header("Location: perfil.php");
    exit;

  }
}

if ($auth->check()) {
  header("Location:perfil.php");
  exit;
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
    		<select class='form-control' name='genre' >
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

