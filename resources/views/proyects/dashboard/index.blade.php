@extends('dashboard')

@section('ct')
	@include('messages.messages')
	<div class="row">
		<div class="col-md-12">
			<h3>
				{{ title_case($type) }}
				<a href="{{ url('/dashboard/proyects/create/' . $type) }}" class="btn btn-success pull-right">
					Nuevo
				</a>
			</h3>
			<hr>
		</div>
		@foreach($data as $client)
			<div class="col-md-3">
				<div class="panel">
					<div class="panel-body">
						<a href="{{ url('/dashboard/proyects/' . $type . '/' . $client->id . '/edit') }}">
							<img src="{{ url('/images/proyects/' . $client->image) }}" class="img-responsive" />
						</a>
						<p class="text-center">
							<a href="{{ $client->url }}" target="_blank">
							{{ $client->url }}
						</a>
						</p>
					</div>
					<div class="panel-footer text-center">
						<button class="btn btn-danger">
							<i class="fa fa-trash-o"></i>
						</button>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@stop