@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go back</a>
    <div class="card bg-dark">
        <h5 class="card-header">{{ $post->title }}</h5>
        <div class="card-body">
            <p class="card-text">{{ $post->content }}</p>
            @if( Auth::check() )
                <a href="#" class="btn btn-primary">+1 lamp</a>
            @endif
        </div>
         <div class="card-footer text-muted">
            By: {{ $post->user->name}}
            Created on: {{ $post->created_at ?? 'No date' }} 
            | Last edited on: {{ $post->updated_at}}
        </div>
        @if( Auth::check() )
            @if( Auth::user()->id == $post->user_id)
            <div class="row pull-right">
                <a class="btn btn-default text-white col-1" href="/posts/{{ $post->id }}/edit">Edit</a>
                <form action="/posts/{{ $post->id }}" method="POST" class="col-1">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger text-white">Delete</button>
                </form>
            </div>
            @endif
        @endif
    </div>
@endsection