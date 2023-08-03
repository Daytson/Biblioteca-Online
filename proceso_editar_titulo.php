<?php 

if(!isset ($_POST['id_titulo'])){
    header('Location: index.php?mensaje=error');
}

include 'model/conexion.php';
$id_titulo = $_POST["txtId_titulo"];
$titulo = $_POST["txtTitulo"];
$tipo = $_POST["txtTipo"];
$id_pub = $_POST["txtId_publicacion"];
$precio = $_POST["txtPrecio"];
$avance = $_POST["txtAvance"];
$total_ventas = $_POST["txtTotal_ventas"];
$notas = $_POST["txtNotas"];
$fecha_pub = $_POST["txtFecha_publicacion"];
$contrato = $_POST["txtContrato"];

$sentencia = $bd->prepare("UPDATE titulos SET  titulo = ?, tipo = ?, id_pub = ?, precio = ?, avance = ?, total_ventas = ?, notas = ?, fecha_pub = ?, contrato = ? where id_titulo = ?;");
$resultado = $sentencia->execute([$titulo, $tipo, $id_pub, $precio, $avance, $total_ventas, $notas, $fecha_pub, $contrato, $id_titulo]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=editado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}

?>