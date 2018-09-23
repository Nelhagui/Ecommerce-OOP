<div class="menu">
    <img style="width:103px; height:66px;" src="images/logo.jpg" alt="" class="logo">
    <ul class="nav">
        <li class="nav-item"> 
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="preguntasfrecuentes.php">Faq</a>
        </li>
        <?php if(!$auth->check()): ?>
            <li class="nav-item">
              <a class="nav-link" href="sesion.php">Iniciar Sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro.php">Registrarme</a>
            </li>
        <?php else: ?>

            <li class="nav-item"><a class="nav-link" href="logout.php">Cerrar Sesión</a></li>

            <li class="nav-item"><a class="nav-link" href="backend.php">Administrar</a></li>

        <?php endif; ?>



    </ul>
    <div class="icono-carrito">
      <a href="#"><img src="images/carrito-icono.png" alt="Mis Compras"></a>
    </div>
  </div>





            


