@extends('layout.layout')

@section('title')
    Create Blog
@endsection

@section('content')
    <h2>Create Blog</h2>
    <form action="{{url('/create')}}" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Blog Content</label>
            <textarea class="form-control" name="content" rows="5" cols="12" style="resize: none" placeholder="Write your content here..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
