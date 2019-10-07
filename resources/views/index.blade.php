@extends('master')

@section('title')

	Home - Salvavidas 
	
@endsection

@section('ct')

	<div class="carousel slide" data-ride="carousel">
		  	<div class="carousel-inner" role="listbox">
		    	<div class="carousel-item active">
		      		{{-- <img class="d-block img-fluid" src="https://placeholdit.imgix.net/~text?txtsize=100&bg=888888&txtclr=ffffff&txt=1200%C3%97480&w=1200&h=480" alt="First slide" width="100%"> --}}
		      		<img src="{{ url('/images/imagen-01.png') }}" class="d-block img-fluid" alt="First slide" width="100%" style="height: 350px;" />
		      		<div class="carousel-caption d-md-block" id="caption-top">
					    <h3>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ...</h3>
					</div>
					<div class="carousel-caption d-md-block" id="caption-middle">
					    <p>Lorem Ipsum...</p>
					</div>
		      		<div class="carousel-caption d-md-block" id="caption-bottom">
					    <button class="btn btn-warning">
					    	SOLICITAR INFORMACION
					    </button>
					</div>
		    	</div>
		  	</div>
		</div>
		<!--/Header-->
		
		<!--Content-->
		<section class="container">
			<div class="row" id="first-block">
				<div class="col-sm-12">
					<h1 class="title text-center b-bottom-width">
						<span class="text-muted">Más de 3000 Empresas y Entidades</span>
						<strong>Cardioprotegidas</strong>
					</h1>	
				</div>
				<img src="images/icon1.png" class=" mx-auto d-inline-block" alt="..." width="200" height="200">
				<br>
				<img src="images/icon2.png" class=" mx-auto d-inline-block" alt="..." width="200" height="200">
				<br>
				<img src="images/icon3.png" class=" mx-auto d-inline-block" alt="..." width="200" height="200">
				<br>
				<img src="images/icon4.png" class=" mx-auto d-inline-block" alt="..." width="200" height="200">
			</div>
			<div class="row" id="second-block">
				<div class="col-sm-12">
					<h1 class="title text-center b-bottom-width">
						<span class="text-muted">Últimas Noticias</span>
						<strong>Publicadas</strong>
					</h1>	
				</div>
				<div class="col-md-4 new">
					<div style="width: 100%;padding-top: 80%; background-image: url('images/new1.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;" class=" mx-auto d-block"></div>
					<h1 class="title">
						<span class="text-muted">Illya</span>
						<strong>Alvarado</strong>
					</h1>	
					<p class="lead description">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
				</div>
				<hr>
				<div class="col-md-4 new">
					<div style="width: 100%;padding-top: 80%; background-image: url('images/new2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;" class=" mx-auto d-block"></div>
					<h1 class="title">
						<span class="text-muted">Maria</span>
						<strong>Flores</strong>
					</h1>	
					<p class="lead description">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
				</div>
				
				<div class="col-md-4 new">
					<div style="width: 100%;padding-top: 80%; background-image: url('images/new3.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;" class=" mx-auto d-block"></div>
					<h1 class="title">
						<span class="text-muted">Cesar</span>
						<strong>Montenegro</strong>
					</h1>	
					<p class="lead description">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
				</div>
			</div>
		</section>
		<!--/Content-->

@endsection