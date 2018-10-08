<footer class="main-footer">
    <ul>
        <li> 
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="preguntasfrecuentes.php">Faq</a>
        </li>
        <?php if(!$auth->check()): ?>
            <li>
              <a href="sesion.php">Iniciar sesión</a>
            </li>
            <li>
              <a href="registro.php">Registrarme</a>
            </li>
        <?php else: ?>

            <li><a href="logout.php">Cerrar sesión</a></li>

            <li><a href="upload-service.php">Ofrecer un servicio</a></li>

        <?php endif; ?>

    </ul>
</footer>
