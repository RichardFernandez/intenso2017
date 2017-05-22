<!DOCTYPE html>
<html lang="es">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield('title', 'INTENSIVETTT, Entrenamientos en linea')</title>
		<link rel="stylesheet" href="/css/normalize.css">
		<link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap-flexmin.css') }}">
		<link rel="stylesheet" href="/css/intensivettt.css">
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-99610375-1', 'auto');
		  ga('send', 'pageview');

		</script>
		@yield('css')
	</head>
	<body>

	    @include('layouts.front-partials.nav')

	    <div class="container-fluid"> 
		@yield('content')
       </div>

        @include('layouts.front-partials.subfooter')

		<footer>
        	@include('admin.template.partials.footer')
        </footer>
        
        <script src="{{ asset('libs/jquery/jquery-3.2.1.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('libs/chosen/chosen.jquery.js') }}"></script>
		@yield('js')
	</body>
</html>