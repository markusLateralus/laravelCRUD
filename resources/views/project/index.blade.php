@extends("layout");
@section("titulo","portfolio")
@section("portfolio")

<div class="container">
<h1 class="display-5">{{ __('PROJECTS') }}</h1>
<div class="d-flex justify-content-between align-items-center">
@auth
<a class="btn btn-primary" href="{{route('project.create')}}"> crear nuevo</a>
@endauth
</div>
<hr>
<ul class="list-group">
	@isset($project)
   @if($project)
	@foreach ($project as $registro ) 
		<li class="list-group-item border-0 mb-3 shadow-sm">
			<a class="text-secondary d-flex justify-content-between align-items-center"href="{{ route('project.show',$registro) }}"> 
				<span class="font-weight-bold">
				{{$registro->title}}
			</span>
			<span class="text-black-50">
				{{$registro->created_at->format("d/m/Y")}}
			</span>
				</a></li>
	@endforeach
	@else
	<li	class="list-group-item border-0 mb-3 shadow-sm">
> la lista está vacia </li>
	@endif
	@else
	<li class="list-group-item border-0 mb-3 shadow-sm">
> la lista no existe </li>
	@endisset
	{{$project->links()}}
</ul>
</div>
@endsection