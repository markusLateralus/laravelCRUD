

@csrf
<div class="form-group">
	<label for="title">titulo </label>
	<input class="form-control bg-light shadow-sm @error('title') is-invalid @else border-0 @enderror" id="title"type='text' name="title" value="{{ old( 'title', $project->title)}}" />@error("title")
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
		@enderror
	</div>
	<div class="form-group">
		<label for="url">url </label>
		<input class="form-control bg-light shadow-sm @error('url') is-invalid @else border-0 @enderror" id="url" type="text" name="url" value="{{ old('url', $project->url)}}"/>@error("url")
		<span class="invalid-feedback" role="alert">
		<strong>{{$message}}</strong>
		@enderror
	</div>

    <div class="form-group">
	<label for="description">descripción: </label>
	<input class="form-control bg-light shadow-sm @error('description') is-invalid @else border-0 @enderror" id="description" type="text" name="description" value="{{old('description', $project->description)}}"/>@error("description")
		<span class="invalid-feedback" role="alert">
		<strong>{{$message}}</strong>
		@enderror
	</div>