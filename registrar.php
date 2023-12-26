<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtEmpleo"])| empty($_POST["txtContacto"])){
        header('Location: B&S.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $edad = $_POST["txtEdad"];
    $empleo = $_POST["txtEmpleo"];
    $contacto = $_POST["txtContacto"];
    
    $sentencia = $bd->prepare("INSERT INTO persona(nombre,edad,empleo,contacto) VALUES (?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$edad,$empleo,$contacto]);

    if ($resultado === TRUE) {
        header('Location: B&S.php?mensaje=registrado');
    } else {
        header('Location: B&S.php?mensaje=error');
        exit();
    }
    
?>