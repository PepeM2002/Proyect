<?php 
    
    include 'conexion.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $pass = $_POST ['pass'];

    $query = "INSERT INTO usuarios1(nombre_completo, correo, usuario, pass)
    VALUES ('$nombre_completo', '$correo', '$usuario', '$pass')";
    //verificar que el correo no se repita 
    
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios1 WHERE correo='$correo' ");

    if (mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script> 
        alert ("huuyy....Este correo ya existe, Intenta con uno nuevo   ");
        window.location = "../login.php";
        </script>
        ';
        exit();
    }
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios1 WHERE usuario='$usuario' ");

    if (mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script> 
        alert ("huuyy....Este usuario ya existe, Intenta con uno nuevo   ");
        window.location = "../login.php";
        </script>
        ';
        exit();
    }

    $ejecutar= mysqli_query( $conexion, $query);
    if($ejecutar){
        echo '
        <script>
        alert("Usuario registrado con exito");
        window.location = "../login.php";
        </script>   
        ';
    }else{
        echo'
        <script>
        alert("Intentalo de nuevo, usuario no registrado");
        window.location = "../login.php";
        </script>
        ';
    }
?>