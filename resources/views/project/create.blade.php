@extends("layout");
@section("titulo","crear proyecto")
@section("portfolio")

<div class="container">
		<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">



@auth
<form class="bg-white shadow rounded py-3 px-4" method="post" action="{{ route('project.store')}}">
	<h1 class="display-5">CREAR {{ __('PROJECTS') }}</h1>
	<hr>
	@include("project/_formulario")
	<button class="btn btn-primary btn-lg btn-block">guardar</button>
</form>
@endauth
</div>
</div>
</div>
@endsection