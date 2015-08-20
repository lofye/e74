@extends('app')

@section('content')

	<h1 class="page-heading">Create Blog Post</h1>

	{!! Form::open(['method' => 'GET', 'action' => 'PostsController@store']) !!}

		<div class="form-group">
			{!! Form::label('title', 'What is the title of this post?.' ) !!}
			{!! Form::text('title', $title, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content', 'What is the content of this post?' ) !!}
			{!! Form::textarea('content', $content, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}
	
	@include ('errors.list')

@endsection