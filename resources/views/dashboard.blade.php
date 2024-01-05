@extends('layouts.app')

@section('content')
    <div id="dashboard" class="dashboard">
        <div class="container">
            <div class="dashboard-wrapper">
                <table>
                    <tr>
                        <th colspan="3"><h1>Hello! {{ Auth::user()->name  }}</h1></th>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <a href="{{ route('posts.create') }}" class="btn create">Create Post</a>
                            <h4>@if(count($posts) > 0) Your Posts @endif</h4>
                        </td>
                    </tr>

                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <tr>
                                <td>
                                    <a href="{{ route('posts.show', $post) }}" class="title">
                                        <h5>{{$post->title}}</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('posts.edit', $post) }}" class="btn edit">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                    @else
                        <tr>
                            <td colspan="3">
                                You have no posts
                            </td>
                        </tr>
                    @endif

                </table>
                  
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
