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
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/stilo.css" />
		<link rel="icon" type="image/jpg" href="Img/logo.png">
		<link
			rel="stylesheet"
			media="screen and (max-width:768px)"
			href="css/mobile.css"
		/>
		<title>CECANI LATINOAMERICA</title>
	</head>
	<nav class="menu">
		<section class="menu__container">
		<a href="Principal.php"><img src="img/A_Mesa-de-trabajo-1.png" style="height: 60px;" width="100%"></a>
			<ul class="menu__links">
			   
	
				<li class="menu__item menu__item--show">
					<a href="#" class="menu__link"> Trabajos <img src="assets/arrow.svg" class="menu__arrow"></a>
	
					<ul class="menu__nesting">
						<li class="menu__inside">
							<a href="S&B.php" class="menu__link menu__link--inside">Servicios por bienes</a>
						</li>
						<li class="menu__inside">
							<a href="B&S.php" class="menu__link menu__link--inside">Bienes por servicios</a>
						</li>
						
					</ul>
				</li>
	
				<li class="menu__item  menu__item--show">
					<a href="#" class="menu__link">Perfil  <img src="assets/arrow.svg" class="menu__arrow"></a>
	
					<ul class="menu__nesting">
						<li class="menu__inside">
							<a href="perfil/perfil.php" class="menu__link menu__link--inside">Mi cuenta</a>
						</li>
						<li class="menu__inside">
							<a href="#" class="menu__link menu__link--inside">Mis proyectos, trabajos</a>
						</li>
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
		<header id="mainheader">
			<nav id="navbar">
				<div class="container">
					<h1 class="logo"><a href="#mainheader">CECANI LATINOAMERICA</a></h1>
					<ul>
						<li><a href="#mainheader">Principal</a></li>
						<li><a href="#portfolio">¿Que es CECANI LATINOAMERICA?</a></li>	
						<li><a href="#about">Sobre nosotros </a></li>
					</ul>
				</div>
			</nav>
			<div id="showcase">
				<div class="container">
					<div class="showcase-row">
						<div class="showcase-row-title">
							<p></p>
							<h1 class="display-1">
								Sobre <br /><span class="txt-orange">CECANI LATINOAMERICA</span>
							</h1>
							<p class="large">
						
							</p>
							<a href="#portfolio" class="btn btn-round btn-dark"
								>CECANI</a
							>
						</div>
						<div class="showcase-row-img">
							<img src="img/showcase.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</header>

		<section id="portfolio">
			<div class="container">
				<h2>¿Que es CECANI LATINOAMERICA?</h2>
				<p>
					Sobre Nosotros
Una Sociedad Civil (S.C.) integrada por un grupo de profesionales educados en México y en el extranjero, con alta especialización en los ámbitos de administración públicos y privados. 
Empoderamos a los ciudadanos a través de capacitación constante, dándoles las herramientas necesarias para desarrollar sus propios proyectos sociales y empresariales.
				</p>
				<div class="portfolio-row">
					<a><img src="img/portfolio-1.jpg" alt="" /></a>
					<a><img src="img/portfolio-3.jpg" alt="" /></a>
					<a><img src="img/portfolio-2.jpg" alt="" /></a>
				</div>
				<div class="portfolio-row">
					<a><img src="img/portfolio-4.jpg" alt="" /></a>
					<a><img src="img/portfolio-5.jpg" alt="" /></a>
					<a><img src="img/portfolio-6.jpg" alt="" /></a>
				</div>
			</div>
		</section>

		<section id="about">
			<div class="container">
				<h2>Sobre nosotros</h2>
				<h1>Misión</h1>
				<p>
Empoderar líderes visionarios y capacitados para transformar su entorno, comprometidos con el desarrollo social, en lo público y lo privado, en México y Latinoamérica.
				</p>
				<h1>Visión</h1>
				<p>
					Ser la fuente de capacitación y empoderamiento por excelencia, a través del desarrollo y difusión de contenido de calidad que forma líderes de alto impacto social.
				</p>
				
			</div>
		</section>


		<footer id="mainfooter">
			<div class="social-buttons">
				<a href="https://www.facebook.com/cecanilatinoamerica/" target="blank_" class="social-buttons__button social-button social-button--facebook">
				<span class="social-button__inner">
				<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
				</span>
				</a>

				<a href="https://www.instagram.com/cecani_latinoamerica/?hl=es" target="blank_" class="social-buttons__button social-button social-button--instagram">
				<span class="social-button__inner">
				<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
				</span>
				</a>
				<a href="https://www.youtube.com/channel/UCAEBhGQZXmTOyp8dHYeSKHA" target="blank_" class="social-buttons__button social-button social-button--youtube">
				<span class="social-button__inner">
				<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
				</span>
				</a>

			   </div>
		</footer>
	</body>
</html>