@extends('layouts.app')

@section('content')

    <section class="hero">
        <div class="container">
            <h1>Welcome To My Blog</h1>
            
            <a class="btn" href="{{ route('posts.create') }}">Create Post</a>
        </div>
    </section>
    <section id="blog" class="blog">
    	<div class="container">
        @if(count($posts) > 0)
            <h3 class="heading">LATEST</h3>
            
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
                <div style="text-align: center; margin-top: 1rem;">
                    <a class="more" href="{{ route('posts') }}">See more</a>
                </div>
            </div>
        @endif
        </div>
    </section>
    
@endsection
