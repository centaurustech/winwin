@extends('index')
@section('content')
<div class="container-fluid">
	<div class="ingreso">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="well text-primary shadow">
						<img src="../img/logo2.png" class="img-responsive center-block">
						<h1>Ingresa tu iniciativa</h1>
						{!! form($formulario_proyecto) !!}
						<!--form class="text-left">
							<div class="form-group">
								<label for="exampleInputEmail1">Nombre:</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail2">Apellidos:</label>
								<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Apellidos">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail3">Iniciativa:</label>
								<input type="email" class="form-control" id="exampleInputEmail3" placeholder="iniciativa">
							</div>
							<div class="form-group">
								<label for="exampleInputAmount">Cantidad (en pesos chilenos):</label>
								<div class="input-group">
									<div class="input-group-addon">$</div>
									<input type="text" class="form-control" id="exampleInputAmount" placeholder="cantidad">
									<div class="input-group-addon">clp</div>
								</div>
							</div>
							<label>Escribe un descripción de tu iniciativa:</label>
							<textarea class="form-control" rows="11"></textarea>
							<br>
							<button class="btn btn-block btn-primary">Enviar</button>
						</form-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection