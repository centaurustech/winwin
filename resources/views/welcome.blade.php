@extends('index')
@section('content')

	@include('portada.landing')
<div class="container-fluid">
	@include('portada.descripcion')
	@include('portada.destacados')
	@include('portada.asociados')		
</div>
@endsection
	
