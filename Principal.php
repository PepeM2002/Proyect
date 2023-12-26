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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" type="image/jpg" href="Img/logo.png">
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
<h1 class="titulo">Portal de empleo</h1>

<div class="info">
    <div class="img"><video  width="50%" height="300px" controls autoplay muted> <source src="empleo.mp4" type="video/mp4"></video></div>
    <div class="inf">
        <h2>¿Que pretendemos?</h2> 
        <p>Un portal de empleo es, fundamentalmente, una página web especializada en integrar la oferta y la demanda existente en el mercado laboral actual. Algunos buenos ejemplos nos lo ofrecen Infojobs o Laboris. El objetivo principal de este tipo de plataformas es doble. Por un lado, facilitan a los candidatos encontrar ofertas de trabajo acordes a su perfil. Por otro, ayudan a las empresas a agilizar sus procesos de selección ya que pueden acceder a solicitantes acordes a sus necesidades en pocos minutos gracias a su ingente base de datos.</p>
            </div>
</div>
<div class="tarjetas">
<div class="tarjeta">
    <div class="enca">
        <div class="circulo"></div>
        <div class="img">
            <img src="img/maxresdefault (1).jpg" alt="">
        </div>
    </div>

    <div class="description">
        <h3>¿Que es Cecani?</h3>
        <p>Una Sociedad Civil (S.C.) integrada por un grupo de profesionales educados en México y en el extranjero</p>
    </div>

    <div class="contact">
        <a href="Portafolio.php">Conoce mas</a>
    </div>
</div>




</div>
</body>
<footer>
<h4 class="titulo-final">&copy;CECANI LATINOAMERICA </h4>
</footer>

</html>


    <script src="js/app.js"></script>