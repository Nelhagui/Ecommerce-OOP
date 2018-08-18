<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
    <title>Iniciar Sesión</title>
</head>
<body>
     
    <!-- NAV -->
        <div class="menu">
            <img style="width:103px; height:66px;" src="images/logo.jpg" alt="" class="logo">
            <ul class="nav">
                <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="sesion.php">Iniciar Sesión</a>
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
        </div>
        <!-- FIN NAV -->

        <div class="container-fluid">
            <div class="row">
                <form class="form-signin" action="#" method="POST">
                    <h2>Ingrese sus datos</h2>
                    <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su Email">
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su Contraseña">
                    </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>
            </div>
        </div>
       
</body>
</html>

