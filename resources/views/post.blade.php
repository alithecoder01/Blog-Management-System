@extends('layout.layout')

@section('title')
    Post
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{ $post->title }}</h1>
                <hr>
                <h3>Excerpt:</h3>
                <p class="card-text">{{ $post->excerpt }}</p>
                <hr>
                <h3>Body:</h3>
                <p class="card-text">{{ $post->body }}</p>
                <hr>
                <h4>Categories:</h4>
                <ul class="list-inline">
                    @foreach ($post->categories as $category)
                        <li class="list-inline-item badge bg-primary">{{ $category->name }}</li>
                    @endforeach
                </ul>
                <hr>
                <h4>Tags:</h4>
                <ul class="list-inline">
                    @foreach ($post->tags as $tag)
                        <li class="list-inline-item badge bg-secondary">{{ $tag->name }}</li>
                    @endforeach
                </ul>
                <hr>
                <div class="d-flex justify-content-end">
                    <a href="{{url('/editPost/'.$post->id)}}" class="btn btn-primary me-2">Edit</a>
                    <form action="{{url('/home/'. $post->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
