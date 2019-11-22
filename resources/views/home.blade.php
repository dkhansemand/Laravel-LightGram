@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create post</a>
                    <h3>Your posts</h3>
                   <table class="table table-striped text-white">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($posts) > 0)
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title}}</td>
                                    <td></td>
                                    <td class="d-inline-flex ">
                                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-default text-white">Edit</a>
                                        <form action="/posts/{{ $post->id }}" method="POST" class="col-1">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger text-white">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>No posts</td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endif
                        </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
