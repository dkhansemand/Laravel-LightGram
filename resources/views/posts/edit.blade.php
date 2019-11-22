@extends('layouts.app')

@section('content')
    <h1>Edit post - '{{ $post->title }}'</h1>
    <div class="row">
        <div class="col-6">
            <form method="POST" action="/posts/{{ $post->id }}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="postTitle">Title</label>
                    <input type="text" class="form-control" name="title" id="postTitle" aria-describedby="postTitleHelp" placeholder="Enter title" value="{{ $post->title }}" required>
                    <small id="postTitleHelp" class="form-text text-muted">Be creative with your titles .</small>
                </div>
                <div class="form-group">
                    <label for="postContent">Content</label>
                    <textarea class="form-control" name="content" id="postContent" rows="4" required>{{ $post->content }}</textarea>
                </div>
                
                <button type="submit" name="btnSubmit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
@endsection