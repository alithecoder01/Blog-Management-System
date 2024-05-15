@extends('layout.layout')

@section('title')
    Edit Post
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success"> {{ session('success') }}</div>
    @endif
    <div class="card">
        <div class="card-header">
            <h2>Update Post</h2>
        </div>

        <div class="card-body">
            <form action="{{ url('/editPost/'.$post->id )}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$post->title}}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Blog Content</label>
                    <textarea class="form-control" name="content" rows="5" cols="12" style="resize: none">{{$post->body}}</textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="excerpt" class="form-label">Blog Excerpt</label>
                    <textarea class="form-control" name="excerpt" rows="3" cols="12" style="resize: none"
                    >{{$post->excerpt}}</textarea>
                    @error('excerpt')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category">Cotegory</label>
                    <div class="checkbox">
                        <!--Need to display them from the DB-->
                        
                        @foreach ($category as $ct)
                            <label for="category{{ $ct->id }}">{{ $ct->name }}</label>
                            <input type="checkbox" name="category[]" value="{{ $ct->id }}" {{ $post->categories->contains($ct->id) ? 'checked' : '' }}>
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
                            <input type="checkbox" name="tag[]" value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'checked' : '' }}>
                        @endforeach
                        
                        @error('tag')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="btn">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
