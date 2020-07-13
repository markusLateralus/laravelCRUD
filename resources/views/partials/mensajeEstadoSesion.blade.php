
@if(session("estado"))
<div class="alert alert-primary alert-disissible fade show" role="alert">
	{{session("estado")}};
	<button type="button" class="close" data-dismiss="alert" aria-label="close">
		<span aria-hidden="true">&times; </span>
	</button>
</div>



@endif