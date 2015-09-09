<!DOCTYPE html>
<html>
	<head>
		<title>~WinWin~ | Uno por Uno | Integrandonos como Sociedad</title>

		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

	</head>
	<body>
		@include('global.barra')

		@yield('content')

		@include('global.footer')

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	    <script src="js/responsive.js"></script>
    	<script src="js/bootstrap.js"></script>
    	<script src="js/utilidades.js"></script>
    	<script src="js/jquery.easing.min.js"></script>
	</body>
</html>