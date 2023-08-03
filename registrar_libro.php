<?php 
    print_r($_POST);
    if(empty($_POST["txtId_titulo"]) || empty($_POST["txtTitulo"]) || empty($_POST["txtTipo"]) || empty($_POST["txtId_publicacion"]) || empty($_POST["txtPrecio"]) || empty($_POST["txtAvance"]) || empty($_POST["txtTotal_ventas"]) || empty($_POST["txtNotas"]) || empty($_POST["txtFecha_publicacion"]) || empty($_POST["txtContrato"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
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

    $sentencia = $bd->prepare("INSERT INTO titulos(id_titulo, titulo, tipo, id_pub, precio, avance, total_ventas, notas, fecha_pub, contrato) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
    $resultado = $sentencia->execute([$id_titulo,$titulo,$tipo,$id_pub,$precio,$avance,$total_ventas,$notas,$fecha_pub,$contrato]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>