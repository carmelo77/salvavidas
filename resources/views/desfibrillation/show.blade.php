@extends('master')

@section('title')
	
	Soy Salvavidas - Salvavidas

@endsection

@section('ct')

		<div class="carousel slide" data-ride="carousel">
		  	<div class="carousel-inner" role="listbox">
		    	<div class="carousel-item active">
		      		{{-- <img class="d-block img-fluid" src="https://placeholdit.imgix.net/~text?txtsize=100&bg=888888&txtclr=ffffff&txt=1200%C3%97480&w=1200&h=480" alt="First slide" width="100%"> --}}
		      		<img src="{{ url('/images/new3.jpeg') }}" class="d-block img-fluid" alt="First slide" width="100%" style="height: 220px;" />
		      		<div class="carousel-caption d-md-block" id="caption-top">
					</div>

					<div class="carousel-caption d-md-block" id="caption-bottom">
					    <h1 class="title4">Soy <strong>Salvavidas</strong></h1>
					</div>
		    	</div>
		  	</div>
		</div>
		<!--/Header-->
		<br />
		<!--Content-->
		<section class="container">
			<div class="row" id="first-block">
				<div class="col-sm-12">
					<article class="text-center text-desc">
						<span>Únete al <strong>Proyecto</strong> Salvavidas. Aprende RCP y ten cerca un desfibrilador.</span>
						<p><span>Estos son algunas de las personas famosas que apoyan el acceso público a la desfibrilación que promueve el <strong>Proyecto Salvavidas</strong></span></p>
					</article>	
				</div>
				
				<!-- Primera línea de imagenes -->
				<div class="col-sm-3">
					<div class="rings">
				      <a href="#">
				        <img class="img-responsive w25" src="{{ url('/images/avatar.jpg') }}"  alt="">
				        <span>Illya Alvarado</span>
				      </a>
				    </div>
				</div>

				<div class="col-sm-3">
					<div class="rings">
				      <a href="#">
				        <img class="img-responsive w25" src="{{ url('/images/avatar.jpg') }}"  alt="">
				        <span>Illya Alvarado</span>
				      </a>
				    </div>
				</div>

				<div class="col-sm-3">
					<div class="rings">
				      <a href="#">
				        <img class="img-responsive w25" src="{{ url('/images/avatar.jpg') }}"  alt="">
				        <span>Illya Alvarado</span>
				      </a>
				    </div>
				</div>

				<div class="col-sm-3">
					<div class="rings">
				      <a href="#">
				        <img class="img-responsive w25" src="{{ url('/images/avatar.jpg') }}"  alt="">
				        <span>Illya Alvarado</span>
				      </a>
				    </div>
				</div>

				<!-- Segunda línea de imagenes -->
				<div class="col-sm-4">
					<div class="rings">
				      <a href="#">
				        <img src="{{ url('/images/new3.jpeg') }}"" class="img-responsive w40" alt="">
				        <span>Illya Alvarado</span>
				      </a>
				    </div>
				</div>

				<div class="col-sm-3">
					<div class="rings">
				      <a href="#">
				        <img src="{{ url('/images/avatar.jpg') }}"" class="img-responsive w20" alt="">
				        <span>Illya Alvarado</span>
				      </a>
				    </div>
				</div>

				<div class="col-sm-5">
					<div class="rings">
				      <a href="#">
				        <img src="{{ url('/images/new3.jpeg') }}"" class="img-responsive w40" alt="">
				        <span>Illya Alvarado</span>
				      </a>
				    </div>
				</div>
				
				<!-- Tercera Línea de imagenes-->
				<div class="col-sm-3">
					<div class="rings">
				      <a href="#">
				        <img src="{{ url('/images/avatar.jpg') }}"" class="img-responsive w30" alt="">
				        <span>Illya Alvarado</span>
				      </a>
				    </div>
				</div>
				<div class="col-sm-9">
					<div class="rings">
				      <a href="#">
				        <img src="{{ url('/images/new3.jpeg') }}"" class="img-responsive w80" alt="">
				        <span>Illya Alvarado</span>
				      </a>
				    </div>
				</div>
					
					<br />
					
					<div class="col-sm-12">
						<article class="text-center">
							<a class="link" href="#" style="text-decoration: none;">MOSTRAR MAS IMAGENES </a>
							<i class="fa fa-arrow-down link" aria-hidden="true"></i>
						</article>
					</div>
			
				<!--<img src="images/icon1.png" class=" mx-auto d-inline-block" alt="..." width="200" height="200">
				<br>
				<img src="images/icon2.png" class=" mx-auto d-inline-block" alt="..." width="200" height="200">
				<br>
				<img src="images/icon3.png" class=" mx-auto d-inline-block" alt="..." width="200" height="200">
				<br>
				<img src="images/icon4.png" class=" mx-auto d-inline-block" alt="..." width="200" height="200"> -->
			</div>
		</section>
		<!--/Content-->
		<div class="c1">
		<section class="container">
			<div class="row" id="first-block">
				<div class="col-sm-12">
					<h3 class="title3 text-center b-bottom-width">
						<span>Nuestros</span>
						<strong>Servicios</strong>
					</h3>	
				</div>

				<img src="images/new1.jpeg" class=" mx-auto d-inline-block" alt="..." width="200" height="200">
				<br>
				<img src="images/new1.jpeg" class=" mx-auto d-inline-block" alt="..." width="200" height="200">
				<br>
				<img src="images/new1.jpeg" class=" mx-auto d-inline-block" alt="..." width="200" height="200">
				<br>
				<img src="images/new1.jpeg" class=" mx-auto d-inline-block" alt="..." width="200" height="200">
			</div>
		</section>
		</div>

		<section class="container">
			<div class="row" id="first-block">
				<div class="col-sm-12">
					<h3 class="title3 text-center b-bottom-width">
						<span>Clientes de </span>
						<strong>Referencia</strong>
					</h3>	
				</div>

				<img src="images/mcdonald.jpg" class=" mx-auto d-inline-block" alt="..." width="150" height="100">
				<br>
				<img src="images/mcdonald.jpg" class=" mx-auto d-inline-block" alt="..." width="150" height="100">
				<br>
				<img src="images/mcdonald.jpg" class=" mx-auto d-inline-block" alt="..." width="150" height="100">
				<br>
				<img src="images/mcdonald.jpg" class=" mx-auto d-inline-block" alt="..." width="150" height="100">
				<br>
				<img src="images/mcdonald.jpg" class=" mx-auto d-inline-block" alt="..." width="150" height="100">
				<br>
				<img src="images/mcdonald.jpg" class=" mx-auto d-inline-block" alt="..." width="150" height="100">
			</div>
		</section>

	
	@endsection