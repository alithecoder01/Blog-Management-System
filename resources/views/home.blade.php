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
                <a href="{{url('/create')}}" class="btn btn-primary" type="button">Add New Blog</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2>Your Blogs</h2>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Post Title 1</h5>
                    
                </div>
                <p class="mb-1">Some placeholder content for the first post.</p>
                <small>And some small print.</small>
            </a>
            
        </div>
    </div>
</div>
@endsection
