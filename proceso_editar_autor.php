<?php 
if(!isset ($_POST['id_autor'])){
    header('Location: index.php?mensaje=error');
}

include 'model/conexion.php';
$id_autor= $_POST["txtId_autor"];
$apellido = $_POST["txtApellido"];
$nombre = $_POST["txtNombre"];
$telefono = $_POST["txtTelefono"];
$direccion = $_POST["txtDireccion"];
$ciudad = $_POST["txtCiudad"];
$estado = $_POST["txtEstado"];
$pais = $_POST["txtPais"];
$cod_postal = $_POST["txtCod_postal"];

$sentencia = $bd->prepare("UPDATE autores SET apellido = ?, nombre = ?, telefono = ?, direccion = ?, ciudad = ?, estado = ?, pais = ?, cod_postal = ? where id_autor = ?;");
$resultado = $sentencia->execute([$apellido, $nombre, $telefono, $direccion, $ciudad, $estado, $pais, $cod_postal, $id_autor]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=editado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}
?>