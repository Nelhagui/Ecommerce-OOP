<?php 
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
// QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP

include 'helpers.php'; // ACÁ HAY FUNCIONES COMO EL ODL()                   



$pdo = Connector::make(); // agrego los datos de conección a la base de datos a la variable $pdo
$queryBuilder = new QueryBuilder ($pdo);

if($auth->check()) {  // ACÁ ESTÁ VERIFIFANDO SI EXISTE UNA SESIÓN, LO VERIFICA EN LA FUNCIÓN 'check()' DE LA CLASE "AUTH.PHP"
    redirect('perfil.php'); // SI EXISTE LO LLEVA DIRECTO A PERFIL.PHP
}

// HAGO QUE SI PASA LA VALIDACION VA A PERFIL.PHP
if($_POST) {
    $errores = $validator->loginValidate($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(count($errores) == 0){
        $recordar->recordarUsuario(); // ESTO ES PARA LA FUNCIONALIDAD DE 'RECORDAR USUARIO'
        $email = $_POST['email'];
        $auth->login($email);
        redirect('perfil.php');
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

