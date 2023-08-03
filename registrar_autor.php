<?php 
    print_r($_POST);
    if(empty($_POST["txtId_autor"]) || empty($_POST["txtApellido"]) || empty($_POST["txtNombre"]) || empty($_POST["txtTelefono"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtCiudad"]) || empty($_POST["txtEstado"]) || empty($_POST["txtPais"]) || empty($_POST["txtCod_postal"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $id_autor = $_POST["txtId_autor"];
    $apellido = $_POST["txtApellido"];
    $nombre = $_POST["txtNombre"];
    $telefono = $_POST["txtTelefono"];
    $direccion = $_POST["txtDireccion"];
    $ciudad = $_POST["txtCiudad"];
    $estado = $_POST["txtEstado"];
    $pais = $_POST["txtPais"];
    $cod_postal = $_POST["txtCod_postal"];

    $sentencia = $bd->prepare("INSERT INTO autores(id_autor, apellido, nombre, telefono, direccion, ciudad, estado, pais, cod_postal) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");
    $resultado = $sentencia->execute([$id_autor, $nombre, $apellido, $telefono, $direccion, $ciudad, $estado, $pais, $cod_postal]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>