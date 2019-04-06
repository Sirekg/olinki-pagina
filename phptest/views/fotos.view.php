<!DOCTYPE html>
<html lang="es">
<head>
<title>Sistemas Olinki</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="RICOH, Multifuncionales, Impresoras, Copiadoras" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- banner slider css file -->
	<link href="../css/JiSlider.css" rel="stylesheet">
	<!-- //banner slider css file -->

	<!-- gallery-Swipe-box -->
	<link rel="stylesheet" href="../css/swipebox.css">
	<!-- //gallery-Swipe-box -->
	
	<!-- testimonials css -->
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
	<!-- //testimonials css -->

	<!-- css files -->
	<link rel="stylesheet" href="../css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="../css/fontawesome-all.css">
    <link rel="icon" href="../images/logo.png"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/stylephp.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <title>Tabla refacciones</title>
</head>
<body>
    
    <header>
       	<!-- Navigation -->
        <div class="container">
            <!-- header top -->
            <div class="head-wl d-md-flex py-3">
                <div class="headder-w3 text-uppercase p-1 text-center logo-nav">
                    <img src="../images/olinki.png" alt="">
                <h1><a href="index.html"></a></h1>
                </div>

                <div class="w3-header-top-right-text text-center">
                    <h6 class="caption p-1"> Llámanos</h6>
                    <p>(55)+1517 6464</p>
                </div>

                <div class="email-right text-center">
                    <h6 class="caption p-1">Email</h6>
                    <p><a href="mailto:mail@example.com" class="info"> sistemasolinki@olinki.com.mx</a></p>

                </div>

                <div class="agileinfo-social-grids text-center">
                    <h6 class="caption p-1">Redes Sociales</h6>
                    <ul class="d-flex justify-content-center">
                        <li><a href="https://www.facebook.com/Sistemas.Olinki.Distribuidor.Autorizado/" target="_blank" id="swipebox-close"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="https://www.instagram.com/sistemas.olinki/?hl=es-la" target="_blank"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="https://www.youtube.com/channel/UCBfEfCXgomw78-8EDzrtJbQ?view_as=subscriber" target="_blank"><span class="fab fa-youtube"></span></a></li>
                        
                </ul>
                </div>
            </div>
            <!-- //header top -->
        
            <!-- Nav bar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-faded">
            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">Olinki</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html">Galeria Olinki</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Venta & Renta
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="error.html">Venta Multifuncionales</a>
                        <a class="dropdown-item" href="arrendamiento.html">Renta multifuncionales</a>
                        <a class="dropdown-item" href="php/index.php">Componentes usados</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                </ul>
            </div>
            </nav>
        <!-- Nav bar -->
        </div>
        

    </header>
    <div class="container">
        <h2 class="Idpieza"><?php echo $pieza["IdPartidaEntrada"]; ?></h2>

            <img class="foto" src="img/<?php echo $pieza["IdPartidaEntrada"]; ?>.png" alt="hola">
    </div>
	<div class="return">
		<a href="tabla.php" class="">Volver</a>
    </div>
    
    	<!-- Newsletter  -->
<section class="newsletter py-5 my-lg-5" id="newsletter">
	<h3 class="heading text-center text-uppercase">SUSCRIBIRSE AL BOLETÍN INFORMATIVO</h3>
	<p class="heading-bottom text-center font-italic mb-5">Sistemas Olinki S.A. de C.V.</p>
	<div class="container">
		<form action="#" method="post">
			<input type="email" name="Email" placeholder="Ingresa tu correo..." required>
			<input type="submit" class="text-uppercase" value="Enviar">
		</form>
	</div>
</section>
<!-- //Newsletter  -->

<!-- footer -->
<footer>
	<div class="footer-top">
		<div class="container">
			<div class="row py-5">
				<div class="col-lg-3 col-md-6 footer-grid">
					<div class="footer-logo">
						<h3 class="text-uppercase mb-3">Sistemas Olinki</h3>
						<p>Empresa especializada en la venta, servicio y comercialización de Multifuncionales RICOH; empresa abierta a la innovación; siempre estamos actualizándonos.</p>
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-grid mt-md-0 mt-sm-3 mt-3">
					<h3 class="text-uppercase mb-3">Solutions</h3>
					<ul>
						<li> <a href="#">Industrial Chemicals</a> </li>
						<li> <a href="#">Machinery and Tools</a> </li>
						<li> <a href="#">Coal and Solid Fuels</a> </li>
						<li> <a href="#">Oil & Gas Revolution</a> </li>
						<li> <a href="#">High Quality Materials</a> </li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 mt-lg-0 mt-md-4 mt-sm-3 mt-3 footer-grid">
					<h3 class="text-uppercase mb-3">Contáctenos</h3>
					<address>
						<p class="pb-2"><span class="fa fa-home" aria-hidden="true"></span> Av. Antonio Delfín Madrigal #60, Primer Piso, Col. Copilco el Alto, C.P. 04360<span class="addr">Coyoacán, CDMX.</span></p>
						<p class="pb-2"><span class="fa fa-phone" aria-hidden="true"></span> +052 1517 2526</p>
						<p class="pb-2"><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:contact@mail.com">servicio@olinki.com.mx</a></p>
						<p class="pb-2"><span class="fa fa-globe" aria-hidden="true"></span><a href="#">www.olinki.com.mx</a></p>
					</address>
				</div>
				<div class="col-lg-3 col-md-6 mt-lg-0 mt-md-4 mt-sm-3 mt-3 agile-footer-grid footer-grid">
					<h3 class="text-uppercase mb-3">Instagram Posts</h3>
					<div class="row insta">
						<div class="col-4 w3_agileits_footer_grid_left">
							<a href="#"><img src="images/i1.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="col-4 w3_agileits_footer_grid_left">
							<a href="#"><img src="images/i2.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="col-4 w3_agileits_footer_grid_left">
							<a href="#"><img src="images/i3.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="col-4 w3_agileits_footer_grid_left">
							<a href="#"><img src="images/i4.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="col-4 w3_agileits_footer_grid_left">
							<a href="#"><img src="images/i1.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="col-4 w3_agileits_footer_grid_left">
							<a href="#"><img src="images/i2.jpg" alt=" " class="img-responsive" /></a>
						</div>
					</div>
				</div>
			</div>
			<div class="wthree_copy_right p-3">
				<p class="text-capitalize">Sistemas Olinki S.A. de C.V.   Marzo 2019 | <a href="#">Aviso de privacidad</a></p>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->
</body>
</html>