<?php

    session_start();

    include'conexion.php';

    $correo = $_POST['correo'];
    $pass = $_POST['pass'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios1 WHERE correo='$correo'
    and pass='$pass' ");

    if(mysqli_num_rows ($validar_login) > 0 ){
       $_SESSION['usuario'] = $correo;
        header("location: ../Principal.php");
exit;
    }else{
    echo'
    <script>
    alert("El usuario no existe");
    window.location = "../login.php";
    </script>
    ';
}
?>