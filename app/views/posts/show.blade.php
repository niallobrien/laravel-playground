@extends('templates.master')

@section('content')
{{-- Show a specific post --}}
<div>
	Title: {{ $post->title }}
</div>

<div>
	Content: {{ $post->content }}
</div>
<div>
	<a href=" {{ URL::route('posts.edit', $post->id) }} ">Edit Post</a>
	<a href=" {{ URL::route('posts.destroy', $post->id) }} " data-method="delete">Delete Post</a>
	<a href="{{ URL::route('posts.index') }}">List all posts</a>
</div>
@stop