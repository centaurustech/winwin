
@extends('index')
@section('content')
<div class="list-ini">
	<div class="container">
	<div class="well">
		<div class="row">
			<div class="col-md-4">
				<h1>Categorías <i class="fa fa-tag"></i></h1>
				<div class="list-group text-primary">
					<button type="button" class="list-group-item">Cras justo odio</button>
					<button type="button" class="list-group-item">Dapibus ac facilisis in</button>
					<button type="button" class="list-group-item">Morbi leo risus</button>
					<button type="button" class="list-group-item">Porta ac consectetur ac</button>
					<button type="button" class="list-group-item">Vestibulum at eros</button>
				</div>
			</div>
			<div class="col-md-8">
				
					<div class="row">
					@foreach($iniciativas as $iniciativa)
						<div class="col-md-4">
						<a href="{{ url('iniciativa') }}">
							<div class="panel panel-info">
								<div class="panel-body">
									<img src="../img/1.jpg" class="img-responsive">
									<h2>$220.000clp</h2>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
											<span class="sr-only">40% Complete (success)</span>
										</div>
									</div>
									<h4>{{ $iniciativa->nombre }}</h4>
									<p>{{ $iniciativa->descripcion }}</p>
								</div>
							</div>
						</a>
						</div>	
					@endforeach	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection