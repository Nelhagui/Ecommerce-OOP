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
  </div>
<!-- FIN NAV -->




<div class="container-fluid">

  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <h1>Registro E-COMMERCE</h1>
    </div>
  </div>
  <form>
    <div class="form-group">
      <label for="inputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese email">
      <small id="emailHelp" class="form-text text-muted">No vamos a compartir su email con nadie.</small>
    </div>

    <div class="form-group">
      <label for="inputPassword1">Password</label>
      <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
    </div>

    <div class="form-group">
      <label for="inputDNI">DNI</label>
      <input type="number" class="form-control" id="inputDNI" placeholder="DNI">
    </div>

    <div class="form-group">
      <label for="inputEdad">Edad</label>
      <input type="number" class="form-control" id="inputEdad" placeholder="Edad">
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="inputCheck">
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
  

</body>
</html>