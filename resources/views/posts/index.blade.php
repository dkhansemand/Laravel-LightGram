@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @if(count($posts) >= 1)
        @foreach ($posts as $post)
            <div class="card" style="width: 18rem;">
                <img src="//placehold.it/400x400" class="card-img-top" alt="{{ $post->title }}">
                <div class="card-body">
                    <h5 class="card-title"><a href="posts/{{$post->id}}" >{{ $post->title }}</a></h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <a href="#" class="btn btn-primary">+1 lamp</a>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <h3>No posts!</h3>
    @endif
@endsection