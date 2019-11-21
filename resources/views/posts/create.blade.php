@extends('layouts.app')

@section('content')
    <h1>Create a post</h1>
    <div class="row">
        <div class="col-6">
            <form method="POST" action="/posts">
                @csrf
                <div class="form-group">
                    <label for="postTitle">Title</label>
                    <input type="text" class="form-control" name="posttitle" id="postTitle" aria-describedby="postTitleHelp" placeholder="Enter title" required>
                    <small id="postTitleHelp" class="form-text text-muted">Be creative with your titles .</small>
                </div>
                <div class="form-group">
                    <label for="postContent">Content</label>
                    <textarea class="form-control" name="postcontent" id="postContent" rows="4" required></textarea>
                </div>
                
                <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection