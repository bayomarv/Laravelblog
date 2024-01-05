@extends('layouts.app')

@section('content')
    <div id="create-post" class="create-post">
        <div class="container">
            <div class="create-post_wrapper">
                <h1 class="">Create Post</h1>
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" class="title" placeholder="" value="{{ old('title') }}" required>

                        @error('title')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea id="body" name="body" class="body myTextarea" placeholder="" rows="10" required>
                            {{ old('body') }}
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

                    <button type="submit" class="btn submit">Post</button>
                </form>
            </div>  
        </div> 
    </div>
@endsection