@extends('layout.layout')

@section('title')
    Create Blog
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success"> {{ session('success') }}</div>
    @endif
    <div class="card">
        <div class="card-header">
            <h2>Create Blog</h2>
        </div>

        <div class="card-body">
            <form action="{{ url('/create') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Blog Content</label>
                    <textarea class="form-control" name="content" rows="5" cols="12" style="resize: none"
                        placeholder="Write your content here..."></textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="excerpt" class="form-label">Blog Excerpt</label>
                    <textarea class="form-control" name="excerpt" rows="3" cols="12" style="resize: none"
                        placeholder="Write your excerpt here..."></textarea>
                    @error('excerpt')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category">Cotegory</label>
                    <div class="checkbox">
                        <!--Need to display them from the DB-->
                        @foreach ($category as $category)
                            <label for="category{{ $category->id }}">{{ $category->name }}</label>
                            <input type="checkbox" name="category[]" value="{{ $category->id }}">
                        @endforeach
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tag">Tag</label>
                    <div class="checkbox">
                        <!--Need to display them from the DB-->
                        @foreach ($tag as $tag)
                            <label for="tag{{ $tag->id }}">{{ $tag->name }}</label>
                            <input type="checkbox" name="tag[]" value="{{ $tag->id }}">
                        @endforeach
                        @error('tag')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="btn">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
