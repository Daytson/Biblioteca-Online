<?php 
    if(!isset($_GET['id_titulo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $id_titulo = $_GET['id_titulo'];

    $sentencia = $bd->prepare("DELETE FROM titulos where id_titulo = ?;");
    $resultado = $sentencia->execute([$id_titulo]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>