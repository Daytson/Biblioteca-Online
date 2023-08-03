<?php include 'template/header.php' ?>

<?php 
    if(!isset($_GET['id_autor'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once '<model/conexion.php';
    $id_autor = $_GET['id_autor'];

    $sentencia = $bd->prepare("select * from autores where id_autor = ?;");
    $sentencia->execute([$id_autor]);
    $autor = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($autor)
?>

<?php include 'editar_proceso.php' ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="proceso_editar_autor.php">
                <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus required>
                </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido: </label>
                        <input type="text" class="form-control" name="txtApellido" autofocus required>
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
                        <input type="text" class="form-control" name="txtCod_postal" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="txtId_autor" value="<?php echo $autor->id_autor; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
                &nbsp;
            </div>
        </div>
    </div>
</div>
&nbsp;
<?php include 'template/footer.php' ?>