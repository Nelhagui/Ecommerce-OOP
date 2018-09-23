<?php 
include 'loader.php'; // ESTE ARCHIVO CONTIENE LOS INCLUEDES DE LAS CLASES
// QUE ANTES ESTABAN COMO FUNCIONES EN FUNCIONES.PHP

include 'helpers.php'; // ACÁ HAY FUNCIONES COMO EL ODL()                   

if($auth->check()) {  // ACÁ ESTÁ VERIFIFANDO SI EXISTE UNA SESIÓN, LO VERIFICA EN LA FUNCIÓN 'check()' DE LA CLASE "AUTH.PHP"
    redirect('perfil.php'); // SI EXISTE LO LLEVA DIRECTO A PERFIL.PHP
}

if($_POST) {
    $usuario = $usersDb->dbEmailSearch($_POST['email']); // ENVÍA EL EMAIL A LA FUNCIÓN 'dbEmailSearch($email) DE LA CLASE 'JSONDB.PHP' PARA VERIFICAR SI EXISTE UN USUARIO CON ESE MAIL EN LA BASE DE DATOS
    if($usuario !== null) { 
        if(password_verify($_POST['password'], $usuario['password']) == true) { // COMPRUEBA SI LA CONTRASEÑA COINCIDE USANDO LA FUNCIÓN 'password_verify' DE PHP
            $email = $_POST['email'];
            $auth->login($email); // UTILIZA EL EMAIL PARA INICIAR SESION Y COOKIE DESDE LA FUNCIÓN 'login($mail)' DE LA CLASE "AUTH.PHP"
            redirect('perfil.php');
        } 
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
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email' placeholder="Ingrese su Email">
                </div>
                <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" name='password' placeholder="Ingrese su Contraseña">
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
        </div>
    </div>

    <?php include_once('footer.php'); ?>
       
</body>
</html>

