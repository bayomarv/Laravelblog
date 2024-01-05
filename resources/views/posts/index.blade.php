@extends('layouts.app')

@section('content')
	<div id="blog" class="blog" style="padding: 0 0 3rem">
    	<div class="container">
		@if(count($posts) > 0)
            <div class="blog-wrapper">
			
		        @foreach($posts as $post)
				<div class="row">
		            <div class="left-col">
		                <img style="width:100%" src="{{asset('storage/cover_images')}}/{{$post->cover_image}}">
		            </div>
		            <div class="right-col">
		                <h4><a href="{{ route('posts.show', $post) }}">{{$post->title}}</a></h4>
		                <p class="blog-meta">Written {{ $post->created_at->diffForHumans() }} by <span>{{$post->user->name}}</span></p>
		                <div class="blog-excerpt">@php echo substr($post->body, 0, 500); @endphp</div>
		                <a class="blog-more" href="{{ route('posts.show', $post) }}">( .....more )</a>
		            </div>
		        </div>
				@endforeach
			</div>
			<div>
				{{$posts->links()}}
			</div>
			@else
				<h3 class="heading">No Posts</h3>
			@endif
		</div>
	</div>
		
@endsection
