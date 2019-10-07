@extends('dashboard')

@section('ct')
	@include('messages.messages')
	<div class="row">
		<div class="col-md-12">
			<h3>
				Cursos
				<a href="{{ url('/dashboard/courses/create') }}" class="btn btn-success pull-right">
					Nuevo Curso
				</a>
			</h3>
		</div>
		@foreach($courses as $c)
			<div class="col-md-3">
				<div class="panel">
					<div class="panel-body">
						<img src="{{ url('/images/courses/' . $c->image) }}" class="img-responsive" />
						<hr>
						<p class="text-center">
							<a href="{{ url('/dashboard/courses/' . $c->id . '/edit') }}">
								{{ $c->title }}
							</a>
						</p>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@stop