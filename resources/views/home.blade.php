@extends('layout.layout')

@section('title')
    Home
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Welcome to Your Blog Dashboard</h1>
                <p class="lead text-center">Here you can manage all your blog posts.</p>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="{{ url('/create') }}" class="btn btn-primary" type="button">Add New Blog</a>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <h2>Your Blogs</h2>
            <div class="list-group">

                @forelse ($user->posts as $post)
                    
                    
                    <a href="{{url('post')}}" class="list-group-item list-group-item-action" aria-current="true">
                        
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Title : {{ $post->title }}</h5>
                        </div>
                        <p class="mb-1">Excerpt : {{ $post->excerpt }}</p>

                        <div class="categories">
                            Category:
                            @foreach ($post->categories as $category)
                                <small>{{ $category->name }},</small>
                            @endforeach
                        </div>
                        <div class="tags">
                            Tags:
                            @foreach ($post->tags as $tag)
                                <small>{{ $tag->name }}</small>
                            @endforeach
                        </div>
                        <small>Created by {{ $user->name }} at {{ $post->created_at }}</small>

                    </a>
                @empty
                    <p>No posts found for this user.</p>
                @endforelse

            </div>


        </div>
    </div>
@endsection
