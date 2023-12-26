<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $edad = $_POST['txtEdad'];
    $empleo = $_POST['txtEmpleo'];
    $contacto = $_POST["txtContacto"];

    $sentencia = $bd->prepare("UPDATE persona SET nombre = ?, edad = ?, edad = ?, contacto = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $edad, $empleo,$contacto, $codigo]);

    if ($resultado === TRUE) {
        header('Location: B&S.php?mensaje=editado');
    } else {
        header('Location: B&S.php?mensaje=error');
        exit();
    }
    
?>