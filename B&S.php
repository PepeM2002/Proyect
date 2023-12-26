<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
        <script>
    alert("Inicia sesion");
    window.location = "../pagina web/login.php";
    </script>
        ';
        
        session_destroy();
        die();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <link rel="stylesheet" href="css/Formulario-estilos.css">
        <link rel="icon" type="image/jpg" href="Img/logo.png">
        <title>Servicios por bienes</title>
    </head>
    
    <nav class="menu">
    <section class="menu__container">
    <div class="log">
    <a href="Principal.php"><img src="img/A_Mesa-de-trabajo-1.png" style="height: 60px;" width="100%"></a>

        </div>
        <ul class="menu__links">
           

            <li class="menu__item menu__item--show">
                <a href="S&B.php" class="menu__link"> Trabajos <img src="assets/arrow.svg" class="menu__arrow"></a>

                <ul class="menu__nesting">
                    <li class="menu__inside">
                        <a href="index.php" class="menu__link menu__link--inside">¿Que es un portal de empleo?</a>
                    </li>
                    <li class="menu__inside">
                        <a href="B&S.php" class="menu__link menu__link--inside">Empleos</a>
                    </li>
                    
                </ul>
            </li>

            <li class="menu__item  menu__item--show">
                <a href="#" class="menu__link">Perfil  <img src="assets/arrow.svg" class="menu__arrow"></a>

                <ul class="menu__nesting">
                    <li class="menu__inside">
                        <a href="php/Cerrar.php" class="menu__link menu__link--inside">Cerrar sesion</a>
                    </li>
                </ul>
            </li>

            <li class="menu__item">
                <a href="Contactos.PHP" class="menu__link">Contactos</a>
            </li>

        </ul>

        <div class="menu__hamburguer">
            <img src="assets/menu.svg" class="menu__img">
        </div>
    </section>

  
</nav>
    <body>
    <?php include 'template/header.php' ?>
<br>
<?php
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from persona");
    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- inicio alerta -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            
            

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   



            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <!-- fin alerta -->
            <div class="card">
                <div class="card-header">
                    Lista de Empleos
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Empleo</th>
                                <th scope="col">Contacto</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($persona as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->codigo; ?></td>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->edad; ?></td>
                                <td><?php echo $dato->empleo; ?></td>
                                <td><?php echo $dato->contacto; ?></td>
                                <td><a class="text-success" href="editar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form class="p-4" method="POST" action="registrar.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad: </label>
                        <input type="number" class="form-control" name="txtEdad" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Empleo: </label>
                        <input type="text" class="form-control" name="txtEmpleo" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contacto: </label>
                        <input type="text" class="form-control" name="txtContacto" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>
    </body>
</html>
