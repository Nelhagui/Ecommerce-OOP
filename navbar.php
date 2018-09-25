<div class="menu">
    <img style="width:200px; height:50px;" src="images/logo-ferre.png" alt="" class="logo">
    <ul class="nav">
        <li class="nav-item"> 
          <a class="nav-link active" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="preguntasfrecuentes.php">FAQ</a>
        </li>
        <?php if(!$auth->check()): ?>
            <li class="nav-item">
              <a class="nav-link" href="sesion.php">INICIAR SESIÓN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro.php">REGISTRARME</a>
            </li>
        <?php else: ?>

            <li class="nav-item"><a class="nav-link" href="logout.php">CERRAR SESIÓN</a></li>

            <li class="nav-item"><a class="nav-link" href="productos.php">SUBIR PRODUCTO</a></li>

        <?php endif; ?>



    </ul>
    <div class="icono-carrito">
      <a href="#"><img src="images/carrito-icono.png" alt="Mis Compras"></a>
    </div>
  </div>





            


