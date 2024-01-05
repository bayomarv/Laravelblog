@extends('layouts.app')

@section('content')
	<div id="post" class="post">
		<div class="container" style="background:white;">
		    <div class="post-wrapper">
			    <div style="text-align: right;">
		            <a class="more" href="{{ route('posts') }}">All Posts</a>
		        </div>
				@if ($post)
					<h1>{{$post->title}}</h1>
					<p class="blog-meta">Written {{ $post->created_at->diffForHumans() }} by <span>{{$post->user->name}}</span></p>
					<img style="width:100%" src="{{asset('storage/cover_images')}}/{{$post->cover_image}}">
					<br><br>
					<div id="post">
						{!!$post->body!!}
					</div>
				@endif
			</div>
		</div>
	</div>
@endsection