


<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
    <title>Services - Admin</title>
</head>
<body>
    <?php include_once('navbar.php'); ?>
    <?php include_once('nav-admin.php'); ?> 

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="list-categories">
                <div class="list-group">
                    <?php foreach($servicios as $servicio): ?>
    
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?=$servicio['name']; ?></h5>
                            </div>
                            <p class="mb-1"><?=$servicio['description']; ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4">







  <form method='post' action='' class='subir-producto'>
        <!-- SELECION DE CATEGORÍA -->
          <div class="form-group">
            <div class="controls">
              <select class='form-control' name='category' >
                  <option disabled selected>Seleccione una Categoría</option>
                  <?php foreach($categorias as $categoria): ?>
                    <option value='<?=$categoria['id'] ?>' type='text'>
                      <div class="d-flex w-100 justify-content-between">
                          <p class="mb-1"><?=$categoria['name']?></p>
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
                  <?php foreach($usuarios as $usuario): ?>
                    <option value='<?=$usuario['id']; ?>'>
                      <div class="d-flex w-100 justify-content-between">
                          <p class="mb-1"><?=$usuario['username']; ?></p>
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
    </div>
</div>






</body>
    
</html>