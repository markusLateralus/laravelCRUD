<!DOCTYPE html>
<html>
<head>
	<title>@yield("titulo"," por defecto")</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	     <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="/css/app.css">
	<script src="/js/app.js" defer></script>


</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
	<!--para incluir la barra de navegacion que tenemos apartada-->
@include("partials/nav")
	<!--para incluir los mensajes de sesiones-->
@include("partials/mensajeEstadoSesion")
</header>
<main class="py-4">
<!--para incluir elmentos exclusivos para cada pagina-->
@yield("home")
@yield("about")
@yield("contact")
@yield("portfolio")
</main>

<footer class="bg-white text-black-50 text-center text-black-50 shadow">
	{{config("app.name")}} | Copyright @ {{date("Y")}}
</footer>
</div>
</body>
</html>