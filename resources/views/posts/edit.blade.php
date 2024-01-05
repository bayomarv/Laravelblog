@extends('layouts.app')

@section('content')
    <div id="create-post" class="create-post">
        <div class="container">
            <div class="create-post_wrapper">
                <h1 class="">Edit Post</h1>
                <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" class="title" value="{{$post->title}}" required>

                        @error('title')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea id="body" name="body" class="body myTextarea" rows="15" required>
                            {{$post->body}}
                        </textarea>

                        @error('body')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="cover_image">Upload Image</label><br>
                        <input type="file" id="cover_image" name="cover_image">
                    </div>

                    <button type="submit" class="btn submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection