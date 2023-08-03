<?php
    print_r($_POST);
    if(empty($_POST["correo"]) || empty($_POST["nombre"]) || empty($_POST["asunto"]) || empty($_POST["comentario"])){
    header('Location: index.php?mensaje=falta');
    exit();
    }

    include_once 'model/conexion.php';
    // Obtener los datos del formulario

    date_default_timezone_set('America/Santo_Domingo');

    $fecha = date('y/m/d h:i:s a', time());
    $correo = $_POST["correo"];
    $nombre = $_POST["nombre"];
    $asunto = $_POST["asunto"];
    $comentario = $_POST["comentario"];

    // Insertar los datos en la base de datos (esto es solo un ejemplo, asegúrate de validar y sanitizar los datos antes de insertarlos)
    $sentencia = $bd->prepare("INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (?, ?, ?, ?, ?);");
    $resultado = $sentencia->execute([$fecha, $correo, $nombre, $asunto, $comentario]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }

?>

