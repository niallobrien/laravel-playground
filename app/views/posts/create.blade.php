@extends('templates.master')

@section('content')
{{-- Display form to create a new post --}}
<div>
	{{ Form::model($post, ['route' => ['posts.store'] ]) }}
	@include('posts._form')
		<div>
			{{ Form::submit('Create post!') }}
		</div>
	{{ Form::close() }}
@stop