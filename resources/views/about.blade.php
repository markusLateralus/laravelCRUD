@extends("layout");
@section("titulo","about")
@section("about")

<div class="container">
	<div class="row">
		<div class="col-12 col-lg-6">
			<img class="img-fluid" src="/img/about.svg" alt="bienvenido">
		</div>
	<div class="col-12 col-lg-6">
<h1 class="diplay-5 text-primary">{{ __("ABOUT")}}</h1>
@auth
{{ auth()->user()->name}}
<a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}">contactar conmigo</a>
<a class="btn btn-lg btn-block btn-outline-primary" href="{{route('project.index')}}">proyectos</a>
@endauth
</div>
</div>
</div>
@endsection