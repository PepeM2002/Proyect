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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/Untitled-1.css">
    <link rel="icon" type="image/jpg" href="Img/logo.png">
    <title>Portal de empleo</title>

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

    
    <header class="content header">
        <h2 class="title">Pero ¿qué es un portal de empleo?</h2>
        <p>
            Un portal de empleo es, fundamentalmente, una página web especializada en integrar la oferta y la demanda existente en el mercado laboral actual. Algunos buenos ejemplos nos lo ofrecen Infojobs o Laboris. El objetivo principal de este tipo de plataformas es doble. Por un lado, facilitan a los candidatos encontrar ofertas de trabajo acordes a su perfil. Por otro, ayudan a las empresas a agilizar sus procesos de selección ya que pueden acceder a solicitantes acordes a sus necesidades en pocos minutos gracias a su ingente base de datos.
        </p>
    </header>

    <section class="content sau">
<br><br><br><br><br><br><br>
        <h2 class="title">¿Qué ventajas ofrecen los portales de empleo a las empresas?</h2>
        <p>Procesos de selección de menor duración. Es posible establecer filtros por palabras clave o elementos similares que evitan tener que gestionar cientos de currículum que no cumplen con los parámetros determinados en la oferta. Algo que no sucede si, por ejemplo, se reciben los documentos en papel.</p>
        
        <div class="box-container">

            <div class="box">
                <i class="fab fa-angular"></i>
                <h3>¿Que buscamos?</h3>
                <p>Capacidad para desarrollar ideas e innovar</p>
            </div>
            <div class="box">
                <i class="fab fa-apple"></i>
                <h3>Tu actitud debe ser de...</h3>
                <p>Productividad</p>
            </div>
            <div class="box">
                <i class="fab fa-android"></i>
                <h3>Tus capacidades</h3>
                <p>Capacidad de análisis</p>
            </div>

        </div>

    </section>

   

    <section class="content price">

        <article class="contain">
            <br><br> <br> <br>  <br><br>
            <h2 class="title">¿Qué perfil buscan las empresas?</h2>
            <p>
                Las organizaciones buscan profesionales que se estén formando continuamente para adaptarse a las nuevas necesidades que surgen en los diferentes entornos de trabajo
            </p>
            
            <a href="https://www.equiposytalento.com/noticias/2021/06/21/que-perfil-buscan-las-empresas" class="btn">Saber Mas</a>

        </article>

    </section>
    <footer>
<h4 class="titulo-final">&copy;CECANI LATINOAMERICA </h4>
</footer>
