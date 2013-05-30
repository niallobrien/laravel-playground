@extends('templates.master')

@section('content')
{{-- Display form to edit a new post --}}
<div>
	{{ Form::model($post, ['method' => 'PUT', 'route' => ['posts.update', $post->id]] ) }}
	@include('posts._form')
		<div>
			<a href=" {{ URL::previous() }} ">Cancel</a>
			{{ Form::submit('Save post!') }}
		</div>
	{{ Form::close() }}
</div>
@stop