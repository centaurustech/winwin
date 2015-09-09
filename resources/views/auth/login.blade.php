@extends('index')
@section('content')
<div class="container-fluid">
	<div class="ingreso">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! form($formulario_login) !!}
			</div>
		</div>
	</div>
</div>
@endsection