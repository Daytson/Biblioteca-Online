<?php include 'template/header.php' ?> 

<div class="container mt-5">
      <div class="card">
        <div class="card-header">
          Ingresar datos:
        </div>
        <form class="p-4" method="POST" action="registrar_autor.php">
          <div class="mb-3">
            <label class="form-label">ID Autor: </label>
            <input type="text" class="form-control" name="txtId_autor" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Apellido: </label>
            <input type="text" class="form-control" name="txtApellido" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="txtNombre" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Telefono: </label>
            <input type="text" class="form-control" name="txtTelefono" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Direccion: </label>
            <input type="text" class="form-control" name="txtDireccion" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Ciudad: </label>
            <input type="text" class="form-control" name="txtCiudad" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Estado: </label>
            <input type="text" class="form-control" name="txtEstado" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Pais: </label>
            <input type="text" class="form-control" name="txtPais" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Codigo Postal: </label>
            <input type="number" class="form-control" name="txtCod_postal" autofocus required>
          </div>
          <div class="d-grid">
            <input type="submit" class="btn btn-primary" value="Registrar">
          </div>
        </form>
        &nbsp;
      </div>
    </div>
  </div>
</div>
&nbsp;

<?php include 'template/footer.php' ?> 