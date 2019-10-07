@extends('dashboard')

@section('ct')
	<div class="row">
		<div class="col-md-12">
			<h3>
				Agregar Playa
			</h3>
		</div>
		<div class="col-md-6">
			<div class="panel">
				<form action="{{ url('/dashboard/beach') }}" method="POST">
					<div class="panel-body">
					
						{{ csrf_field() }}

						<div class="form-group">
							<label>Playa</label>
							<input type="text" name="name" class="form-control" />
						</div>

						<div class="form-group">
							<label>Localidad</label>
							<input type="text" name="location" class="form-control" />
						</div>

						@include('messages.messages')

					</div>
					<div class="panel-footer text-center">
						<button class="btn btn-success">
							Agregar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop