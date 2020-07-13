@extends("layout");
@section("title", $project->title)

@section("portfolio")
<div class="container">
	<div class="bg-white p-5 shadow rounded">
<h1 class="display-5">{{$project->title}}</h1>

<p class="text-secondary">{{$project->description}}</p>
<p class="text-black-50">{{$project->created_at->diffForHumans()}}</p>


<div class="d-flex justify-content-between align-items-center">

<div class="btn-group btn-group-sm">
	<a class="btn btn-secondary" href="{{route('project.index')}}">regresar</a>
<a class="btn btn-primary" href="{{route('project.edit', $project)}}">editar</a>
<a class="btn btn-danger" href="#" onclick="document.getElementById('formEliminar').submit()">eliminar</a>
</div>
<form method="post" action="{{route('project.destroy', $project)}}" id="formEliminar">
	@csrf @method("delete")
</form>
</div>
</div>
</div>
@endsection