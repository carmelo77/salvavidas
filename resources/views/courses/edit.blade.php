@extends('dashboard')

@section('ct')
	<div class="row">
		<div class="col-md-12">
			<h3>
				Editar Curso
			</h3>
		</div>
		<div class="col-md-6">
			<div class="panel">
				<form action="{{ url('/dashboard/courses/' . $c->id) }}" method="POST" enctype="multipart/form-data">
					<div class="panel-body">
						{{ csrf_field() }}
						{{ method_field('PUT') }}

						<div class="form-group">
							<label>Título</label>
							<input type="text" name="title" class="form-control" value="{{ $c->title }}" />
						</div>

						<div class="form-group">
							<label>Descripción</label>
							<textarea rows="4" name="description" class="form-control">{{ $c->description }}</textarea>
						</div>

						<div class="form-group">
							<label>Vídeo: </label>
							{{-- <label>
								<input type="radio" name="radio_video" id="url" checked />URL
							</label>
							<label>
								<input type="radio" name="radio_video" id="file" />Archivo
							</label> --}}
							<input type="text" id="video" name="video" class="form-control" placeholder="Enlace de Youtube"
								value="{{ $c->video }}" />
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label>Url Blog</label>
									<input type="text" name="url_blog" class="form-control" value="{{ $c->url_blog }}" />
								</div>
								<div class="col-md-4">
									<label>Precio</label>
									<input type="text" name="price" class="form-control" 
										placeholder="USD" value="{{ $c->price }}" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Imagen</label>
							<input type="file" name="image" class="form-control" accept="image/*" />
							<span class="help-text">
								@if($c->image != 'none.png')
									<a href="{{ url('/images/courses/' . $c->image) }}" target="_blank">
										Ver Imagen
									</a>
								@endif
							</span>
						</div>
						<div class="form-group">
							<label>PDF</label>
							<input type="file" name="pdf" class="form-control" accept="application/pdf" />
							<span class="help-text">
								@if($c->pdf)
									<a href="{{ url('/pdf/' . $c->pdf) }}" target="_blank">
										Ver Archivo PDF
									</a>
								@endif
							</span>
						</div>

						@include('messages.messages')

					</div>
					<div class="panel-footer text-center">
						<button class="btn btn-success">
							Modificar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop