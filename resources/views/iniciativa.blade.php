@extends('index')
@section('content')
<div class="container-fluid">
	<div class="iniciativa">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="well">
						<div class="row">
							<h1 class="text-center text-primary">Ayudanos a celebrar nuestros cumpleaños</h1>
							<hr>
							<div class="col-md-7">
								<img src="../img/2-big.jpg" class="img-responsive">
								<br>
								<ul class="list-inline text-primary1">
									<li><i class="fa fa-facebook-official fa-4x"></i></li>
									<li><i class="fa fa-google-plus-square fa-4x"></i></li>
									<li><i class="fa fa-twitter-square fa-4x"></i></li>
									<li><i class="fa fa-pinterest-square fa-4x"></i></li>
								</ul>
							</div>
							<div class="col-md-5">
								<div class="panel panel-info">
									<div class="panel-heading">
										<ul class="list-inline">
											<li style="float:left"><h4><i class="fa fa-map-marker"></i> Mejillones</h4></li>
											<li style="float:right"><h4><i class="fa fa-tag"></i> Familia</h4></li>
										</ul>
										<br>
									</div>
									<div class="panel-body text-primary text-left">
										<h1>$50.000<small>clp /$62.500clp</small></h1>
										<div class="progress">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											</div>
										</div>
										<p>Recaudado en <strong>24</strong> días por <strong>15</strong> personas</p>
										<hr>
										<button type="button" class="btn btn-info btn-lg btn-block">Financiar</button>
									</div>
								</div>
								<div class="panel panel-info">
									<div class="panel-heading text-left">
										<h2 class="panel-title">Descripción</h2>
									</div>
									<div class="panel-body text-primary text-left">
										<p class="lead">Queremos celebrar nuestros cumpleaños</p>
										<p>Estamos en busca de fondos para poder celebrar a todos quienes participen de nuestros talleres y que estén de cumpleaños entre los meses de Julio y Diciembre del 2015! <br> Necesitamos juntar $62.500 para poder tener una fiesta con regalos que haremos nosotros mismos duran el mes de Octubre.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
