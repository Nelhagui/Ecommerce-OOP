<?php 
include 'loader.php'; 
include 'helpers.php'; 
               

if($auth->check()) { 
    header("Location:perfil.php");
    exit;
}

$errores = [];
if ($_POST) {
    //SI hay $_POST

    $errores = $validator->validarLogin($_POST, $db);
    if (count($errores) == 0) {
        $email = $_POST["email"];
        $arrayID=$db->dbEmailSearch($_POST["email"]);
        
        $auth->login($email);
          header("Location:perfil.php");
        exit;
    }
}




?>


<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
    <title>Iniciar Sesión</title>
</head>
  <body class="text-center" >
    <form class="form-signin" action='' method='post'>
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Ingrese sus datos</h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" name='email' required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name='password' required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>

