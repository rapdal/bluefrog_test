@extends ('app')

@section ('content')
	<h1>{{ $findArticle->title }}</h1>

	<div class="body">
		{{ $findArticle->body }}
	</div>

@stop