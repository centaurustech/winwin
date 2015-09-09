
@extends('index')
@section('content')
<div class="container-fluid">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			@foreach($iniciativas as $iniciativa)
				<div class="well">
					<h2>{{ $iniciativa->nombre }}</h2>
					<p>{{ $iniciativa->descripcion }}</p>
				</div>
			@endforeach
			</div>
		</div>

</div>
@endsection