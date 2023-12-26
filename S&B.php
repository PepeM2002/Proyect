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
        <link rel="stylesheet" href="css/cssestilo.css">
        <link rel="icon" type="image/jpg" href="Img/logo.png">  
        <title>Trabajos</title>
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
    
<br><br><br><br><br><br>
<div class="tarjetas">
<div class="tarjeta">
    <div class="enca">
        <div class="circulo"></div>
        <div class="img">
            <img src="img/maxresdefault (1).jpg" alt="">
        </div>
    </div>

    <div class="description">
        <h3>¿Que es  portal de empleo?</h3>
        <p> Un portal de empleo es, fundamentalmente, una página web especializada en integrar la oferta...</p>
    </div>

    <div class="contact">
        <a href="index.php">Conoce mas</a>
    </div>
</div>

<div class="tarjeta">
    <div class="enca">
        <div class="circulo"></div>
        <div class="img">
            <img src="img/showcase.png" alt="">
        </div>

    </div>

    <div class="description">
        <h3>Bienes por servicios</h3>
        <h4>System Engineer</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, eligendi!</p>
    </div>

    <div class="contact">
        <a href="B&S.php">Contacto</a>
    </div>
</div>


</div>


</div>
</body>