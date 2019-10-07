@extends('master')

@section('ct')
	<div class="carousel slide" data-ride="carousel">
	  	<div class="carousel-inner" role="listbox">
	    	<div class="carousel-item active">
	      		{{-- <img class="d-block img-fluid" src="https://placeholdit.imgix.net/~text?txtsize=100&bg=888888&txtclr=ffffff&txt=1200%C3%97480&w=1200&h=480" alt="First slide" width="100%"> --}}
	      		<img src="{{ url('/images/new3.jpeg') }}" class="d-block img-fluid" alt="First slide" width="100%" style="height: 220px;" />
	      		<div class="carousel-caption d-md-block" id="caption-top">
				</div>

				<div class="carousel-caption d-md-block" id="caption-bottom">
				    <h1 class="title4">Formación y <strong>Cursos</strong></h1>
				</div>
	    	</div>
	  	</div>
	</div>
	<section class="container">
		<div class="row" id="first-block">
			<div class="col-sm-12 text-center">
				<h1 class="title text-center b-bottom-width">
					<span class="text-muted">Información / <b style="color: black; font-weight: bold">Presentación</b></span>
				</h1>
			</div>
			<div class="col-md-6">
				<p>
					Nuestros cursos de formación en primeros auxilios y desfibrilación son impartidos por profesionales altamente cualificados en medicina de urgencias, emergencias, anestología, cuidados intensivos, pedagogía y psicología.
				</p>

				<p>
					Los cursos se realizan en Aula Abierta, en la que se puede apuntar cualquier persona individualmente. También realizamos cursos a medida para empresas, instituciones, hospitales, colegios, universidades, asociaciones de madres y padres, servicios de emergencia, policía, ejército, etc.
				</p>

				<p>
					Nuestra información cuenta con el respaldo y homologación de diversas sociedades científicas e instituciones nacionales e internacionales:
				</p>

				<p>
					Nuestros cursos de formación en primeros auxilios y desfibrilación son impartidos por profesionales altamente cualificados en medicina de urgencias, emergencias, anestología, cuidados intensivos, pedagogía y psicología.
				</p>

				<p>
					Nuestros cursos de formación en primeros auxilios y desfibrilación son impartidos por profesionales altamente cualificados en medicina de urgencias, emergencias, anestología, cuidados intensivos, pedagogía y psicología.
				</p>

				<p>
					Nuestros cursos de formación en primeros auxilios y desfibrilación son impartidos por profesionales altamente cualificados en medicina de urgencias, emergencias, anestología, cuidados intensivos, pedagogía y psicología.
				</p>
			</div>
			<div class="col-md-6">
				<img src="{{url('/')}}/images/anex.png" class="img-responsive" />
			</div>

			<div class="col-md-12">
				<h1 class="title text-center b-bottom-width">
					<span class="text-muted">Catálogo de<b style="color: black; font-weight: bold">Cursos</b></span>
				</h1>
				<div class="container" style="background: #f2f2f2; padding: 30px">
					<div class="row">
						@foreach($courses as $course)
							<div class="col-md-4">
								<div class="panel" style="padding: 15px">
									<div class="panel-body">
										<img src="{{url('/images/courses/' . $course->image)}}" style="width: 100%;height: 350px;" />
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<h1 class="title text-center b-bottom-width">
					<span class="text-muted">Operación <b style="color: black; font-weight: bold">Calamar</b></span>
				</h1>
				<div class="row">
					<div class="col-md-2">
						<img src="{{url('/')}}/images/calamar.png" width="100%" />
					</div>
					<div class="col-md-8">
						<p>
							<b>Objetivo:</b> Operación Calamar en Centros Educativos, Colegios, Institutos y Universidades.
						</p>
						<p>
							Hacer el centro educativo espacio cardioprotegido con la instalación de desfibrilador, vitrina y algoritmo RCP con los pasos de la cadena de supervivencia.
						</p>
						<p>
							Ayudar a recaudar dinero a los alumnos que reciben el curso para destinarlo al viaje de estudios o actos aprobados por el centro educativo.
						</p>
						<p>
							Los siguientes años o para los colegios que disponen ya de desfibriladores, la Operación Calamar destinará más importante de la recaudación a la actividad autorizada por el colegio o viaje de estudios.
						</p>
						<p>
							Formar a los profesores en Soporte Vital Básico según legislación vigente en cada Comunidad Autónoma (opcional).
						</p>
					</div>
					<div class="col-md-2">
						<img src="{{url('/')}}/images/dw_calamar.png" width="100%" />
					</div>
				</div>
			</div>
		</div>
	</section>
@stop
