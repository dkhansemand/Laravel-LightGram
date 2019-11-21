@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go back</a>
    <div class="card">
        <h5 class="card-header">{{ $post->title }}</h5>
        <div class="card-body">
            <p class="card-text">{{ $post->content }}</p>
            <a href="#" class="btn btn-primary">+1 lamp</a>
        </div>
         <div class="card-footer text-muted">
           {{ $post->created_at ?? 'No date' }}
        </div>
    </div>
@endsection