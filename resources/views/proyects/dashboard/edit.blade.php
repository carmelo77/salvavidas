@extends('dashboard')

@section('ct')
	<div class="row">
		<div class="col-md-12">
			<h3>
				{{ title_case($type) }}
			</h3>
			<hr>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<div class="panel">
				<form action="{{ url('/dashboard/proyects/' . $type . '/' . $proyect->id) }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					{{ method_field('PUT') }}

					<div class="panel-body">
						<div class="form-group">
							<label>Imagen</label>
							<input type="file" name="image" accept="image/*" />

							@if($proyect->image != 'none.png')
								<a href="{{ url('/images/proyects/' . $proyect->image) }}" target="_blank">
									Ver Imagen
								</a>
							@endif
						</div>
						<div class="form-group">
							<label>URL</label>
							<input type="text" name="url" class="form-control" value="{{ $proyect->url }}" />
						</div>
						<div class="form-group">
							@include('messages.messages')
						</div>
						<div class="form-group">
							<button class="btn btn-primary">
								Agregar
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop