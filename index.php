<?php include 'template/header.php' ?>

<!-- inicio alerta -->
  <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
      ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> Rellena todos los campos.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>


      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
      ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Registrado!</strong> Se agregaron los datos.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>



      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
      ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> Vuelve a intentar.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>



      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
      ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Cambiado!</strong> Los datos fueron actualizados.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>


      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
      ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Eliminado!</strong> Los datos fueron borrados.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>

      <!-- fin alerta -->

<div class="container mt-5">
    <div class="row justify-content-center"> 
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">Informacion</a>
            <a href="libros.php" 
            class="list-group-item list-group-item-action">Listado de Libros</a>
            <a href="autores.php" 
            class="list-group-item list-group-item-action">Listado de Autores</a>
            &nbsp;
            <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">Gestion de entidades</a>
            <a href="agregar_libro.php" 
            class="list-group-item list-group-item-action">Agregar Libro</a>
            <a href="agregar_autor.php" 
            class="list-group-item list-group-item-action">Agregar Autor</a>
            </div>
            &nbsp;
            <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">Contacto</a>
            <a href="agregar_contacto.php" 
            class="list-group-item list-group-item-action">Agregar Contacto</a>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>
