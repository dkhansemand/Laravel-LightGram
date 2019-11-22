@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <div class="row">
    @if(count($posts) >= 1)
        @foreach ($posts as $post)
            <div class="col-3 mt-2">
                <div class="card bg-dark" style="width: 15rem;">
                    <img src="//placehold.it/400x400" class="card-img-top" alt="{{ $post->title }}">
                    <div class="card-body">
                        <h5 class="card-title"><a href="posts/{{$post->id}}" >{{ $post->title }}</a></h5>
                        <p class="card-text">{{ $post->content }}</p>
                        @if( Auth::check() )
                            <a href="#" class="btn btn-primary">+1 lamp</a>
                        @endif
                    </div>
                    <div class="card-footer text-muted">By: {{ $post->user->name }}</div>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <h3>No posts!</h3>
    @endif
    </div>
@endsection