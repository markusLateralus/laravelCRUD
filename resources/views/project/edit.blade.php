@extends("layout");
@section("titulo","editar proyecto")
@section("portfolio")

<div class="container">
		<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">


@auth
<form class="bg-white shadow rounded py-3 px-4" method="post" action="{{ route('project.update', $project)}}">
	<h1 class="display-5">EDITAR {{ __('PROJECTS') }}</h1>
	 <hr>
	 @method('PATCH')
	@include("project/_formulario")
	<button class="btn btn-primary btn-lg btn-block">actualizar</button>
	<a class="btn btn-link btn-block", href="{{route('project.index')}}">cancelar</a>
</form>
@endauth
</div>
</div>
</div>
@endsection