<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
    <title>Ofrecer un Servicio</title>
</head>
<body>

<?php include_once('navbar.php'); ?>
<div class="container-fluid">

  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <h2>SUBIR UN SERVICIO</h2>
    </div>
  </div>

  <form method='post' action='' class='subir-producto'>
        <!-- SELECION DE CATEGORÍA -->
          <div class="form-group">
            <div class="controls">
              <select class='form-control' name='category' >
                  <option disabled selected>Seleccione una Categoría</option>
                  <?php foreach($categorias as $categoria): ?>
                    <option value='<?=$categoria['id']; ?>' type='number'>
                      <div class="d-flex w-100 justify-content-between">
                          <p class="mb-1"><?=$categoria['name']; ?></p>
                      </div>
                    </option>
                  <?php endforeach ?>
              </select>
            </div>
          </div>
        <!-- SELECCION DE USUARIO -->
          <div class="form-group">
            <div class="controls">
              <select class='form-control' name='user' >
                  <option disabled selected>Seleccione un Usuario</option>
                  <?php foreach($users as $user): ?>
                    <option value='<?=$user['id']; ?>'>
                      <div class="d-flex w-100 justify-content-between">
                          <p class="mb-1"><?=$user['username']; ?></p>
                      </div>
                    </option>
                  <?php endforeach ?>
              </select>
            </div>
          </div>

    <!-- SUBIR CATEGORÍA -->
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Nombre del servicio" name='name'>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" aria-describedby="emailHelp" name='price' placeholder="Precio">
    </div>

    <div class="form-group">
        <textarea class="form-control" rows="5" id="comment" placeholder='Ingresar una descripción' name='description'></textarea>
    </div>                

    <div class="row">
      <div class="col-12">
        <button type="submit" class="btn btn-primary">ENVIAR SERVICIO</button>
      </div>
    </div>
    
      
    </div>


      
  </form>

</div>

<?php include_once('footer.php'); ?>

</body>
</html>

