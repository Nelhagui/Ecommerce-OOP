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
        var_dump($arrayID['id']);exit;
        
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

<body>
    <?php include_once('navbar.php'); ?>

    <div class="container-fluid"> 
        <div class="row">
            <form class="form-signin" action="" method="post">
                <h2>Ingrese sus datos</h2>
                <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email' placeholder="Ingrese su Email"
                value='<?php $recordar->recordarEmail();?>'>
                <small id="passwordHelp" class="text-danger"> <?php if(isset($errores['email'])): echo $errores['email']; endif; ?> </small>
                </div>
                <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" name='password' placeholder="Ingrese su Contraseña"
                value='<?php $recordar->recordarPass(); ?>'>
                <small id="passwordHelp" class="text-danger"> <?php if(isset($errores['password'])): echo $errores['password']; endif; ?> </small>
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name='recordarme'
                <?php if(isset($_COOKIE['email'])): echo 'checked'; endif; ?>>  
                <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
        </div>
    </div>

    <?php include_once('footer.php'); ?>
       
</body>
</html>

