@extends('templates.master')

@section('content')
{{-- List all Posts --}}
<div>
	@if($posts->isEmpty())
		<p>
			There are no posts.<br />
			Please <a href=" {{ URL::route('posts.create') }} ">create one</a>.
		</p>
	@else
		<h3>All Posts</h3>
		<a href=" {{ URL::route('posts.create') }} ">Create new post</a>.
		<ul>
			@foreach($posts as $post)
				<li>
					{{ $post->title }}
					<a href=" {{ URL::route('posts.show', $post->id) }}">Show</a>
					<a href=" {{ URL::route('posts.edit', $post->id) }} ">Edit</a>
					<a href=" {{ URL::route('posts.destroy', $post->id) }} " data-method="delete">Delete</a>
				</li>
			@endforeach
		</ul>
	@endif
</div>
@stop