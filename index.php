<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php

    $destino = "casamanglecr@gmail.com";
    $asunto="Contacto de Casa Mangle";
    $desde = "From: ".$_POST['email'];
    $comentario = "NOMBRE : " . $_POST['name'] . ".CORREO : " . $_POST['email'] . ".COMENTARIO : " . $_POST['message'];
    $resultado = mail($destino, $asunto, $comentario, $desde);
    /*if($resultado == true){
        echo "mensaje enviado";
        
    }
    else{
     echo "mensaje no enviado";
    
    }*/


?>
<html>
	<head>
		<title>Casa Mangle</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link href="images/thumbs/02.jpg" rel="image_src" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1>Casa Mangle</h1>
				<nav>
					<ul>
						<li><a href="#intro">Bienvenido</a></li>
						<li><a href="#one">Servicios</a></li>
						<li><a href="#two">Opiniones</a></li>
						<li><a href="#work">Galería</a></li>
						<li><a href="#contact">Contacto</a></li>
					</ul>
				</nav>
			</header>

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
						<h2>Bienvenidos a Casa Mangle</h2>
					</header>
					<p><strong>Tamarindo &nbsp;&bull;&nbsp; Guanacaste &nbsp;&bull;&nbsp; C.R <br> 
					a 800 metros de la Playa. </strong> <hr> <br>Casa Mangle is located to 800 meters of the beautiful beach of Tamarindo in Guanacaste, Costa Rica.</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Nuestros Servicios</h2>
					</header>
					<p><strong> Our Services <hr> &nbsp;&bull;&nbsp;Amplio parqueo.<br>&nbsp;&bull;&nbsp;Tres cuartos.<br> &nbsp;&bull;&nbsp;Dos baños con agua caliente.<br> &nbsp;&bull;&nbsp;Cocina equipada, desayunador y comedor.<br>
					&nbsp;&bull;&nbsp; Aire acondicionado en todas las areas.<br>
					&nbsp;&bull;&nbsp;Sala de televisión con cable.<br>
					&nbsp;&bull;&nbsp;Dos sofa cama.<br>
					&nbsp;&bull;&nbsp; Terraza con parrilla. </strong> <hr>
					 Casa Mangle possesses a wide parking, possesses three rooms, two baths with warm water, kitchen totally equipped, table of dining room, air conditioning in all the areas, relies on room of television with cable, two sofa bed, a terrace with his respective gridiron. 
					 </p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>

		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Opiniones</h2>
					</header>
					<p>
					<strong>Reviews <hr>

					<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <br>

					 <i class="fa fa-comments-o" aria-hidden="true"></i> Casa Mangle se encuentra localizada frente al Automercado, el cual cuenta con farmacia, banco y restaurante. <br><br>

					 <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <br>

					 <i class="fa fa-comments-o" aria-hidden="true"></i> Casa Mangle se encuentra cómodamente equipada para un máximo de 10 personas. <br> <br>

					 <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <br>

					 <i class="fa fa-comments-o" aria-hidden="true"></i> Podrá disfrutar de una azada en la terraza mientras los que desean refrescarse, porán estar en el área de la piscina que se encuantra justo al frente de la terraza. </strong> <hr>

					Casa Mangle is located in front of the automarket AM which possesses drugstore, restaurant and Bank.
					The house is comfortably equipped for a maximum of 10 people.
					For those who enjoy the meats and in the same zone one finds the swimming pool for those who want to refresh. 
					 </p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content">
					<header>
						<h2>Disfrute de sus vacaciones</h2> <hr>
						<p> <strong>Enjoy your vacation at Tamarindo Beach.</strong> <br>
						</p>
					</header>

					<!-- Gallery  -->
						<div class="gallery">
							<article class="from-left">
								<a href="images/thumbs/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" title="Área de piscina" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="images/thumbs/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" title="Entrada principal" alt="" /></a>
							</article>
							<article class="from-left">
								<a href="images/thumbs/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" title="Desayunador" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="images/thumbs/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" title="Sala de televisión" alt="" /></a>
							</article>
							<article class="from-left">
								<a href="images/thumbs/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" title="Sala principal" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="images/thumbs/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" title="área de piscina y terraza" alt="" /></a>
							</article>
						</div>

				<footer class="major container 75%">
					<h3>Visitenos </h3>
					<p>Diríjase a Casa Mangle utilizando Waze.</p> <hr>
					<p>Get directions on waze</p>
					<ul>
								

					<div align="center"><a text-align = "center" href="waze://?10.309388, -85.831343&navigate=yes" class=""><img src="images/waz.png" alt="" /></a></div>

								
					</ul>
				</footer>



				</div>


			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content">
					<header>
						<h2>¿Tiene alguna duda o desea reservar?</h2>
						<h3>Inquiry form</h3>
						<p>complete el siguiente formularo y estaremos comunicandonos con usted.</p>
					</header>
					<div class="box">
						<form method="post" action="index.php">
							<div class="field half first"><input type="text" name="name" id="name" placeholder="nombre" /></div>
							<div class="field half"><input type="email" name="email" id="email" placeholder="correo" /></div>
							<div class="field"><textarea name="message" id="message" placeholder="mensaje" rows="6"></textarea></div>
							<ul class="actions">
								<li><input type="submit" value="Enviar mensaje" /></li>
							</ul>
						</form>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions">
						<!-- <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li> -->
						<li><a href="https://www.facebook.com/casa.mangle.5" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<!-- <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li> -->
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; 2017 Casa Mangle </li><li> por: <a href="https://www.yesduet.com">YesDuet</a></li>
					</ul>

			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>