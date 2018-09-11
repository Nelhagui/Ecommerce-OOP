<?php

include_once('funciones.php');
  if($_POST) {
    // 1 - VALIDAR ERRORES para entrar a condicion de guardar users
    $errores = 0;// Igualé a 0 para entrar en la condición abajo, después agregá tu función acá.

    // CREAR USUARIO 
    if ($errores == 0) { //(hay que agregar a la condicion count($errores)== 0 )
        $usuario =crearUsuario($_POST);
        guardarUsuario($usuario);
    }
  }
?>
<!DOCTYPE html>
<html>
<?php include_once('head.php'); ?>
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
    <form action="" method="post">
      <div class="form-group">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese email" name="email">
        <small id="emailHelp" class="form-text text-muted">No vamos a compartir su email con nadie.</small>
      </div>

      <div class="form-group">
        <input type="password" class="form-control" id="inputPassword1" placeholder="Password" name="password">
      </div>

      <div class="form-group">
        <input type="number" class="form-control" id="inputDNI" placeholder="DNI" name="dni">
      </div>

      <div class="form-group">
        <input type="number" class="form-control" id="inputEdad" placeholder="Edad" name="edad">
      </div>

      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="inputCheck" name="terminos">
        <label class="form-check-label" for="inputCheck">Acepta los terminos y condiciones</label>
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