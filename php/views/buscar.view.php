<!DOCTYPE html>
<html lang="en">
<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PCQ3D8F');</script>
<!-- End Google Tag Manager -->

<title>Sistemas Olinki</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Indus Fact Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script src="../js/jquery.swipebox.min.js"></script> 
	<!-- script-for-swipebox -->


	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //script-for-swipebox -->
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
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> 
	<!-- //css files -->

<!-- font-awesome -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- //font-awesome -->
	<!-- web-fonts -->
	
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCQ3D8F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<!-- Navigation -->
	<div class="container">
		<!-- header top -->
		<div class="head-wl d-md-flex py-3">
			<div class="headder-w3 text-uppercase p-1 text-center logo-nav">
				<img src="../images/olinki.png" alt="">
			  <h1><a href="../index.html"></a></h1>
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
    </div>
	<!-- //Navigation -->
	</div>
	<div class="container">
	<section class="inner_page_banner text-center pt-4">
	<h2 class="page_heading text-uppercase pt-md-5 pt-sm-4">Componentes Usados</h2>
	<h4 class="text-uppercase pt-2"><a href="tabla.php">Inicio</a> </h4>
</section>
	</div>
        

		</header>

    <div class="container">
		<div class="my-5 text-right">
			<form name=busqueda method="get" action="buscar.php">	
				<div class="form-group row">
					<div class="col-12 d-flex justify-content-start">
						<input class="d-inline form-control" type="text" name="search" placeholder="Buscar por número de parte o descripción">
						<button type="Submit" class=" btn btn-primary"><i class="fa fa-search"></i></button>
					</div>
					<div class="col-md-6 col-12 my-3 my-md-0 d-flex justify-content-start">
						<select name=modelo class="d-inline-block w-50 form-control" id="exampleFormControlSelect1" placeholder="Modelo">
							<option value="">Modelos</option>
							<?php foreach ($modelos as $modelo): ?>
							<option <?php echo "value=' " . $modelo["IdModelo"];?>'><?php echo $modelo["Modelo"]; ?></option>
							<?php endforeach; ?>
						</select>
						<select name=j class="d-inline-block w-50 form-control" id="exampleFormControlSelect2">
							<option value="">Unidad</option>
							<?php foreach ($unidades as $unidad): ?>
							<option <?php echo "value=' " . $unidad["IdUnidad"];?>'><?php echo $unidad["Unidad"]; ?></option>
							<?php endforeach; ?>
						</select>
						<button type="Submit" class=" btn btn-primary"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</form>      
		</div>
	</div>
	<div class="container">
		<p> <?php echo $title; ?>
	</div>
	<div class="container">
		<div class="py-3 table-responsive">
			<table class="table table-striped table-white table-hover table-sm">
						<thead class="thead-light">
							<tr class="text-center">
								<th scope="col" class="column-1">Componente</th>
								<th scope="col" class="column-2">Descripcion</th>		
							</tr>
						</thead>
						
						
						<?php $sum = 1; ?>
						<?php foreach ($resultados as $resultado): ?>
						<tr class="piezas text-center">
							<td class="column-1">
								<div class="py-2">
									<p>No. de Parte <?php echo $resultado["NumParte"]; ?></p>
									<a href="#imgModal<?php echo $sum; ?>" data-toggle="modal">
										<img src="img/<?php echo $resultado["IdPartidaEntrada"]; ?>.png" class="img-pieza"  alt="">
									</a>
									<div class="col-md-12">
										<button type="button" class="my-3 btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $sum; ?>">
											Cotizar
										</button>
									</div>
								</div>
							</td>
							<td class="column-2"><?php echo $resultado["DescripcionProducto"]; ?></td>
						</tr>
						
						<?php ++$sum ?>
						<?php endforeach; ?>
			</table>
		</div>
	</div>
<!-- Empieza código de php para paginación -->

    <div class="container my-3">
			<div class="row justify-content-center">
				<div class="col-sm-2 text-center">

            <?php if($actual_page > 1): ?>
            <a href="buscar.php?p=<?php echo ($actual_page - 1); ?>
						&search=
							<?php if (isset($search)): ?>
								<?php echo $search; ?>
							<?php endif; ?>
							&modelo=
							<?php if (isset($i)): ?>
								<?php echo $i; ?>
							<?php endif; ?>
							&j=
							<?php if (isset($j)): ?>
								<?php echo $j; ?>
							<?php endif; ?>
							" class="link-pag">Anterior</a>
						<?php endif; ?>
						
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="row justify-content-center">

				
				<?php 
								

					if ($total_pages >=1 && $actual_page <= $total_pages) {
						$counter = 1;
						if ($actual_page >= (floor($limit/2))) {
							echo "<div class='col-1 text-left'><a class='link-pag' href='?p=1&search="
							 . (isset($search)? "$search" :"" ) . "&i="
								. (isset($i)? "$i" :"" ) . "&j="
								 . (isset($j)? "$j" :"" ) . 
								 "'>1</a></div><div class='col-1 text-left'> <span>...</span></div>";
							}
						
						for ($x=($actual_page - 1); $x<=$total_pages; $x++){
							
							if ($x > 0){
								if ($counter < $limit) {
									if ($x == $actual_page) {
										echo "<div class='col-1 text-center'><a class='active' href='?p=$x&search="
										. (isset($search)? "$search" :"" ) . "&i="
										. (isset($i)? "$i" :"" ) . "&j="
										. (isset($j)? "$j" :"" ) . " '> $x </a></div>" ;
									} else {
									echo "<div class='col-1 text-left'><a class='link-pag' href='?p=$x&search="
									. (isset($search)? "$search" :"" ) . "&i="
									. (isset($i)? "$i" :"" ) . "&j="
									. (isset($j)? "$j" :"" ) . " '> $x </a></div>" ;
									$counter++ ;
								}
							}
						}
					}
						if (($actual_page) <= $total_pages - ($limit/2)){
								echo "<div class='col-1 text-left'><span>...</span></div><div class='col-1 text-left'> <a class='link-pag' href='?p= $total_pages&search="
								. (isset($search)? "$search" :"" ) . "&i="
								. (isset($i)? "$i" :"" ) . "&j="
								. (isset($j)? "$j" :"" ) . " '> $total_pages</a> </div>";
							}
					
					}
				?>
								</div>
        </div> 
				<div class="col-sm-2 text-center">
            <?php if(($actual_page != $total_pages) && ($total_pages > 1)): ?>
							<a href="buscar.php?p=<?php echo ($actual_page + 1); ?>
							&search=
							<?php if (isset($search)): ?>
								<?php echo $search; ?>
							<?php endif; ?>
							&modelo=
							<?php if (isset($i)): ?>
								<?php echo $i; ?>
							<?php endif; ?>
							&j=
							<?php if (isset($j)): ?>
								<?php echo $j; ?>
							<?php endif; ?>
							" class="link-pag">Siguiente</a>
            <?php endif; ?>
				</div>
			</div>
		</div>

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
				<div class="col-lg-3 col-md-6 mt-lg-0 mt-md-4 mt-sm-3 mt-3 footer-grid">
					<h3 class="text-uppercase mb-3">Contáctenos</h3>
					<address>
						<p class="pb-2"><span class="fa fa-home" aria-hidden="true"></span> Av. Antonio Delfín Madrigal #60, Primer Piso, Col. Copilco el Alto, C.P. 04360<span class="addr">Coyoacán, CDMX.</span></p>
						<p class="pb-2"><span class="fa fa-phone" aria-hidden="true"></span> +052 1517 2526</p>
						<p class="pb-2"><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:contact@mail.com">servicio@olinki.com.mx</a></p>
						<p class="pb-2"><span class="fa fa-globe" aria-hidden="true"></span><a href="#">www.olinki.com.mx</a></p>
					</address>
				</div>
			</div>
			<div class="wthree_copy_right p-3">
				<p class="text-capitalize">Sistemas Olinki S.A. de C.V.   Marzo 2019 | <a href="#">Aviso de privacidad</a></p>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<?php $sum = 1; ?>
<?php foreach ($resultados as $resultado): ?>

<!-- Modal imagen -->
						
<div class="modal fade show" id="imgModal<?php echo $sum; ?>" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="dynamic-content">
				<img src="img/<?php echo $resultado["IdPartidaEntrada"]; ?>.png" class="" alt=""/>
			</div>
		</div>
	</div>
</div>

<!-- //Modal imagen -->


<!-- Modal botón cotizar-->

	<!-- Variable No. Serie para mandar a CorreoPHP.php -->
	<?php $IdPieza = $resultado["IdPartidaEntrada"]; ?>

<div class="modal fade" id="exampleModal<?php echo $sum; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><?php echo "<span> No. Serie " . $IdPieza . "</span>"; ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="contact-wthree">
					<form action="PHPMailer/CorreoPHP.php" method="post">
						<input type="hidden" name="IdPieza" value="<?php echo $IdPieza; ?>"> 
						<input type="text" name="nombre" placeholder="Nombre" required> 
						<input class="email" name="correo" type="email" placeholder="Email" required>
						<input type="text" name="telefono" placeholder="Teléfono" required> 
						<textarea name="mensaje" placeholder="Mensaje" required></textarea>
						<input type="submit" value="Enviar">
					</form>
				</div>
			</div>
				<div class="modal-footer text-center">
					<p>Sistemas Olinki S.A. de C.V.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- //Modal botón cotizar -->

<?php ++$sum ?>
<?php endforeach; ?>


<!-- js-scripts -->		

	<!-- js -->
	<script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- Banner Slider js script file-->
		<script src="../js/JiSlider.js"></script>
		<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({
					color: '#fff',
					start: 3,
					reverse: true
				}).addClass('ff')
			})
		</script>
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-36251023-1']);
			_gaq.push(['_setDomainName', 'jqueryscript.net']);
			_gaq.push(['_trackPageview']);

			(function () {
				var ga = document.createElement('script');
				ga.type = '../text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();
		</script>
	<!-- //Banner Slider js script file-->

	

	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="../js/jquery.flexslider.js"></script>
	<script type="application/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="../js/SmoothScroll.min.js"></script>
	<script type="application/javascript" src="../js/move-top.js"></script>
	<script type="application/javascript" src="../js/easing.js"></script>
	<script type="application/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

<!-- //js-scripts -->
</body>
</html>