<?php

function editar_titulo(){

    if(!isset ($_POST['id_titulo'])){
        header('Location: index.php?mensaje=error');
    }

    include_once '<model/conexion.php';
    $id_titulo = $_GET['id_titulo'];

    $sentencia = $bd->prepare("select * from `titulos` where id_titulo = ?;");
    $sentencia->execute([$id_titulo]);
    $titulo = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($titulo)

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

    $sentencia = $bd->prepare("UPDATE titulos SET  titulo = ?, tipo = ?, id_pub = ?, precio = ?, avance = ?, total_ventas = ?, notas = ?, fecha_pub = ?, contrato = ? where codigo = ?;");
    $resultado = $sentencia->execute([$titulo,$tipo,$id_pub,$precio,$avance,$total_ventas,$notas,$fecha_pub,$contrato]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
}

function editar_autor(){
    if(!isset ($_POST['id_autor'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $id_autor = $_POST["txtId_Autor"];
    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    $telefono = $_POST["txtTelefono"];
    $direccion = $_POST["txtDireccion"];
    $ciudad = $_POST["txtCiudad"];
    $estado = $_POST["txtEstado"];
    $pais = $_POST["txtPais"];
    $cod_postal = $_POST["txtCod_postal"];

    $sentencia = $bd->prepare("UPDATE autores SET nombre = ?, apellido = ?, telefono = ?, direccion = ?, ciudad = ?, estado = ?, pais = ?, cod_postal = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $apellido, $telefono, $direccion, $ciudad, $estado, $pais, $cod_postal]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
}
?>