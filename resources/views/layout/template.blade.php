<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://unpkg.com/feather-icons"></script>
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- CSS only -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
	<div class="wrapper">
		@include('layout.navigation')
		<div class="main">
			@include('layout.header')

            @yield('content')


		@include('layout.footer')
		</div>
	</div>

	<script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/medicamentos_create.js')}}"></script>
	<script src="{{asset('js/medicamentos_search.js')}}"></script>
    <script src="{{asset('js/medicamentos_delete.js')}}"></script>
    <script src="{{asset('js/ventas/reniec_dni.js')}}"></script>
</body>

</html>
