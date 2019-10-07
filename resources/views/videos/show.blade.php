@extends('master')

@section('title')
	
	Salvavidas TV - Salvavidas

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
					    <h1 class="title4">Salvavidas <strong>TV</strong></h1>
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
						<span>Toda la información sobre el <strong>Proyecto Salvavidas</strong> en Formato Video.</span>
						<p><span>Entrevistas, cursos, tutoriales...</span></p>
					</article>	
				</div>
				
				<div class="col-sm-12 text-center">

					@if($last->type == '0')
						<div class="col-sm-12 text-center">	
						<video width="98%" height="500" controls>
						  <source src="{{ url('/video/'.$last->video) }}" type="video/mp4">
						</video>
						</div>
					@else
						<div class="col-sm-12 text-center">
							<iframe width="98%" height="500" src="{{ $last->video }}"  allowfullscreen></iframe>
						</div>
					@endif				
				</div>


				@foreach($video as $v)
					@if($v->type == '0')
						<div class="col-sm-4 text-center">	
						<video width="300" height="315" controls>
						  <source src="{{ url('/video/'.$v->video) }}" type="video/mp4">
						</video>
						</div>
					@else
						<div class="col-sm-4 text-center">
							<iframe width="300" height="250" src="{{ $v->video }}"  allowfullscreen></iframe>
						</div>
					@endif
				@endforeach

					<br />
					
					<div class="col-sm-12">
						<article class="text-center">
							<a class="link" href="#" style="text-decoration: none;">MOSTRAR MAS VIDEOS </a>
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
		
		<div class="c1" style="height: 200px">
		<section class="container">
			<div class="row" id="first-block">
				<div class="col-sm-12">
					<h3 class="title3 text-center b-bottom-width">
						<span>Alta de </span>
						<strong>Operadores</strong>
					</h3>	
				</div>

				<img src="images/mcdonald.jpg" class=" mx-auto d-inline-block" alt="..." width="150" height="100">
				<br>
				<img src="images/mcdonald.jpg" class=" mx-auto d-inline-block" alt="..." width="150" height="100">
				<br>
				<img src="images/mcdonald.jpg" class=" mx-auto d-inline-block" alt="..." width="150" height="100">
				<br>
				<img src="images/mcdonald.jpg" class=" mx-auto d-inline-block" alt="..." width="150" height="100">
			</div>
		</section>
		</div>
	@endsection