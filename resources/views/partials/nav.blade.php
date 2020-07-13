<!--barra de navegacion-->

<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
	<div class="container">
	<a class="navbar-brand" href="{{route('home')}}">{{config("app.name")}}</a>
	    <button class="navbar-toggler" type="button" 
	     data-toggle="collapse" 
	     data-target="#navbarSupportedContent"
	     aria-controls="navbarSupportedContent" 
	     aria-expanded="false" 
	     aria-label="{{ __('Toggle navigation') }}">
         <span class="navbar-toggler-icon"></span>
        </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
</div>
	<ul class="nav nav-pills">
		<li class="nav-item"><a class="nav-link {{setActivo('home') }}" href="{{route('home')}}">{{ __('HOME') }}</a></li>
		<li class="nav-item"><a class="nav-link {{setActivo('about') }}"href="{{route('about')}}">{{ __('ABOUT') }}</a></li>
		<li  class="nav-item"><a class="nav-link {{setActivo('contact') }}" href="{{route('contact')}}">{{ __('CONTACT') }}</a></li>
		<li  class="nav-item"><a class="nav-link {{setActivo('project.index') }}" href="{{route('project.index')}}">{{ __('PROJECTS') }}</a></li>
		@guest
		<li class="nav-item"><a class="nav-link {{setActivo('login')}}" href="{{route('login')}}">login</a></li>
        @else
        <li class="nav-item"><a class="nav-link" href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">cerrar sesion</a></li>
         @endguest
	</ul>
</div>
</nav>
<!--formulario para cerrar sesion-->
   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
             </form>