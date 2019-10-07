<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield('title')</title>
		<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet">
		<link rel="stylesheet" href="{{url('/')}}/css/bootstrap.css" />
		<link rel="stylesheet" href="{{url('/')}}/css/main.css" >
		
	</head>
	<body>
		<!--Sub-header-->
		<div class="sub-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<b>Teléfono:</b> 900 670 112 - 91 1250 500 | <b>Email:</b> salvavidas@salvavidas.ue
					</div>
				</div>
			</div>
		</div>
		<!--/Sub-header-->
		<!--Header-->
		<header class="container">
			<nav class="navbar navbar-toggleable-md navbar-light">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin: 20px;">
			    	<span class="navbar-toggler-icon"></span>
			 	</button>
			  	<a class="navbar-brand" href="{{url('/')}}/">
			  		<img src="{{url('/')}}/images/logo.png" alt="logo" height="60px">
			  	</a>

			 	<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto menu" style="position: relative;">
			    		<li class="nav-item active">
			        		<a class="nav-link" href="{{url('/')}}/proyecto" data-toggle="dropdown">
							    EL PROYECTO
							</a>

							<div class="mega-menu hidden-xs">
								<div class="row">
									<div class="col-md-4">
										<ul class="border">
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Presentación</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/proyecto/pr_soy.php">Soy Salvavidas</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Vending</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Mision / Vision</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Entidades Colaboradoras</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Clientes de Preferencia</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Distribuidores</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Merchandising</a>
											</li>
										</ul>
									</div>
									<div class="col-md-4">
										<ul class="border">
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Ciudad por la Cardioproteccion</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Geolocalización de Desfribiladores</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Servicios Asistenciales</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Infografias</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Drones Salvavidas</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Tienda Salvavidas</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Salvavidas TV</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{url('/')}}/#">Blog</a>
											</li>
										</ul>
									</div>
									<div class="col-md-4 text-center" style="padding: 20px">
										<img src="{{url('/')}}/images/banner.jpg" alt="" width="50%">
									</div>
								</div>
							</div>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{url('/')}}/#">PULSERAS SALVAVIDAS</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{url('/')}}/#">ESPACIOS CARDIOPROTEGIDOS</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{url('/')}}/formacion/fr_catalogo.php">FORMACIÓN Y CURSOS</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{url('/')}}/#">COMPRA / ALQUILER</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{url('/')}}/#">DESFIBRILADORES</a>
			      		</li>
			    	</ul>
				</div>
			</nav>
		</header>
			
		<section> <!-- class="container" -->
			@yield('ct')
		</section>

		<!--Footer-->
		<footer class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-1 bold">
						<img src="{{url('/')}}/images/pulpo.png" alt="pulpo">
					</div>
					<div class="col-md-3">
						<h1 class="title-2 bold">PROYECTO SALVAVIDAS</h1>
						<p class="text-justify texto">
							C/ Begoña 16 <br>
							288221 Costada (Madrid) <br>
							<strong>CIF:</strong> 856034453 <br>
							<strong>Teléfono:</strong> 50 1250 500 <br>
							<strong>Email:</strong> salvavidas@salvavidas.es
						</p>
					</div>
					<div class="col-md-2">
						<h1 class="title-2 bold">SOLUCIONES</h1>
						<p class="text-justify texto">
							<a href="{{url('/')}}/#">Desfibriladores Gratuitos</a><br>
							<a href="{{url('/')}}/#">Formación y Cursos</a><br>
							<a href="{{url('/')}}/#">Espacios Cardioprotegidos</a><br>
							<a href="{{url('/')}}/soy">Soy salvavidas</a><br>
							<a href="{{url('/')}}/#">Diseño y Creatividad</a>
						</p>
					</div>
					<div class="col-md-2">
						<h1 class="title-2 bold">NOSOTROS</h1>
						<p class="text-justify texto">
							<a href="{{url('/')}}/#">Preguntas Frecuentes</a><br>
							<a href="{{url('/')}}/#">Politica de privacidad</a><br>
							<a href="{{url('/')}}/#">Contacto</a><br>
							<a href="{{url('/')}}/#">Blog</a><br>
							<a href="{{url('/')}}/#">Prensa</a>
						</p>
					</div>
					<div class="col-md-4">
						<h1 class="title-2 bold">RECIBA OFERTAS EXCLUSIVAS EN PAQUETES DE DESARROLLO GENERALES</h1>
						<p class="text-justify texto">
							Regístrese en nuestro newsletter y reciba inforamción sobre <br>
							Desfibriladores, cursos, ofertas, información general, etc...
						</p>
						<form action="#" method="POST">
							<div class="form-group">
								<div class="row">
								<div class="col-md-8">
									<input type="email" name="email" placeholder="CORREO" class="form-control">
								</div>
								<div class="col-md-4">
									<input type="submit" value="ENVIAR" class="btn btn-warning">
								</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</footer>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-12">
						<span class="d-inline-block" style="vertical-align: -webkit-baseline-middle; font-size: 12px;">Copyright 2016 Desarrollado por Cero Ideas</span>
					</div>
					<div class="col-md-3 col-sm-12">
						<img src="{{url('/')}}/images/facebook.png" width="30" class="rounded rs" alt="">
						<img src="{{url('/')}}/images/twitter.png" width="30" class="rounded rs" alt="">
						<img src="{{url('/')}}/images/linkedin.png" width="30" class="rounded rs" alt="">
						<img src="{{url('/')}}/images/google+.png" width="30" class="rounded rs" alt="">
						<img src="{{url('/')}}/images/youtube.png" width="30" class="rounded rs" alt="">
					</div>
				</div>
			</div>
		</div>


		<!--Scripts-->
		<script src="{{url('/')}}/js/jquery-3.1.1.slim.min.js"></script>
		<script src="{{url('/')}}/js/tether.min.js"></script>
		<script src="{{url('/')}}/js/bootstrap.min.js"></script>


		<script src="{{url('/')}}/js/functions.js"></script>
		<!--/Scripts-->
	</body>
</html>