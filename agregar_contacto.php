<?php include 'template/header.php' ?> 

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Formulario de Contacto
        </div>
        <form class="p-4" method="POST" action="registrar_comentario.php">
          <div class="mb-3">
            <label for="correo" class="form-label">Correo: </label>
            <input type="email" class="form-control" name="correo" autofocus required>
          </div>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="nombre" autofocus required>
          </div>
          <div class="mb-3">
            <label for="asunto" class="form-label">Asunto: </label>
            <input type="text" class="form-control" name="asunto" autofocus required>
          </div>
          <div class="mb-3">
            <label for="comentario" class="form-label">Comentario: </label>
            <textarea type="text" class="form-control" name="comentario"></textarea><br>
          </div>
          <div class="d-grid">
            <input type="submit" class="btn btn-primary" value="Registrar">
          </div>
          &nbsp;
    </div>
</div>
&nbsp;
<?php include 'template/footer.php' ?> 