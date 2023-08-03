<?php include 'template/header.php' ?>

<?php 
    if(!isset($_GET['id_titulo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once '<model/conexion.php';
    $id_titulo = $_GET['id_titulo'];

    $sentencia = $bd->prepare("select * from titulos where id_titulo = ?;");
    $sentencia->execute([$id_titulo]);
    $titulo = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($titulo)
?>

<?php include 'editar_proceso.php' ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="proceso_editar_titulo.php">
                <div class="mb-3">
                <label class="form-label">Titulo: </label>
                <input type="text" class="form-control" name="txtTitulo" autofocus required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tipo: </label>
                    <input type="text" class="form-control" name="txtTipo" autofocus required>
                </div>
                <div class="mb-3">
                    <label class="form-label">ID Publicacion: </label>
                    <input type="text" class="form-control" name="txtId_publicacion" autofocus required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio: </label>
                    <input type="number" class="form-control" name="txtPrecio" autofocus required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Avance: </label>
                    <input type="number" class="form-control" name="txtAvance" autofocus required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Total de ventas: </label>
                    <input type="number" class="form-control" name="txtTotal_ventas" autofocus required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Notas: </label>
                    <input type="text" class="form-control" name="txtNotas" autofocus required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fecha de Publicacion: </label>
                    <input type="datetime-local" value="2023-01-01T00:00" min="1900-01-01T00:00" class="form-control" name="txtFecha_publicacion" autofocus required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Contrato: </label>
                    <input type="text" class="form-control" name="txtContrato" autofocus required>
                </div>
                    <div class="d-grid">
                        <input type="hidden" name="txtId_titulo" value="<?php echo $titulo->id_titulo; ?>">
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