<?php 
    if(!isset($_GET['id_autor'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $id_autor = $_GET['id_autor'];

    $sentencia = $bd->prepare("DELETE FROM autores where id_autor = ?;");
    $resultado = $sentencia->execute([$id_autor]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>