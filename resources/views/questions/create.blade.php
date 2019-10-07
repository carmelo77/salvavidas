@extends('dashboard')

@section('ct')
	<div class="row">
		<div class="col-md-12">
			<h3>
				Agregar Preguntas y Respuestas
			</h3>
		</div>
		<div class="col-md-6">
			<div class="panel">
				<form action="{{ url('/dashboard/questions') }}" method="POST">
					<div class="panel-body">
					
						{{ csrf_field() }}

						<div class="form-group">
							<label>Pregunta</label>
							<textarea name="question" id="question"  class="form-control"></textarea>
						</div>

						<div class="form-group">
							<label>Respuesta</label>
							<textarea name="answer" id="answer" class="form-control"></textarea>
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