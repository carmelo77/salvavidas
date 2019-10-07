@if(count($errors) > 0)
	<div class="alert alert-danger">
		@foreach($errors->all() as $msg)
			<p>
				{{ $msg }}
			</p>
		@endforeach
	</div>
@endif

@if(session('msg'))
	<div class="alert alert-{{session('msg')['type']}}">
		@foreach(session('msg')['messages'] as $msg)
			<p>
				{{ $msg }}
			</p>
		@endforeach
	</div>
@endif