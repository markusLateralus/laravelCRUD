@extends("layout");
@section("titulo","contact")
@section("contact")
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">





<form class="bg-white shadow rounded py-3 px-4" method="post" action="{{route('contact.store')}}">
<!--IMPORTANTIIIISIMO AÑADIR LA ANOTACIÓN PARA AGREGAR UN CAMPO OCULTO CON EL TOKKEN DEL USUARIO QUE 
                          LARAVEL AUTOMATICAMENTE LE IMPLEMENTA-->

<h1 class="display-5">{{ __('CONTACT') }}</h1>
<hr>
	@csrf
	<div class="form-group">
		<label for="name">Nombre</label>
		<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror " type="text" name="name" id="name" value="{{old('name')}}">@error("name")
		<span class="invalid-feedback" role="alert">
		<strong>{{$message}}</strong>
		</span>
		@enderror
    </div>
	<div class="form-group">
		<label form="correo">Email</label>
		<input class="form-control bg-light shadow-sm @error('correo') is-invalid @else border-0 @enderror" type="email" id="correo" name="correo" value="{{old('correo')}}">@error("correo")
		<span class="invalid-feedback" role="alert">
		<strong>{{$message}}</strong>
		</span>
		@enderror
	</div>

	<div class="form-group">
		<label form="subject">Asunto</label>
		<input class="form-control bg-light shadow-sm @error ('subject') is-invalid @else border-0 @enderror" type="text" id="subject" name="subject" value="{{old('subject')}}">@error("subject")
		<span class="invalid-feedback role="alert">
		<strong>{{$message}}</strong>
		</span>
	@enderror
    </div>

    <div class="form-group">
	<label for="contenido">Contenido</label>
	<textarea class="form-control bg-light shadow-sm @error ('contenido') is-invalid @else border-0 @enderror" id="contenido" name="contenido"value="{{old('contenido')}}"></textarea>@error("contenido") 
	<span class="invalid-feedback" role="alert">
		<strong>{{$message}}</strong>
	</span>
	@enderror
	</div>

	<div>
	<button class="btn btn-primary btn-lg btn-block">{{ __('send') }}</button>

</form>
	

	</div>
	</div>
</div>
@endsection