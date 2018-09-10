<!DOCTYPE html>

<?php include_once('head.php'); ?>
    <title>Iniciar Sesión</title>
</head>

<body>
    <?php include_once('navbar.php'); ?>

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

    <?php include_once('footer.php'); ?>
       
</body>
</html>

