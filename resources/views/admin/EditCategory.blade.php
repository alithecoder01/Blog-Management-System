@extends('layout.layout')

@section('title')
    Edit Category
@endsection

@section('content')
    
    <div class="card">
        <div class="card-header">
            Edit Category
        </div>
        <div class="card-body">
            <form action="{{ url('/edit_category/'.$category->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category</label>
                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="btn">
                    <button type="submit" class="btn btn-primary">Update Category </button>
                </div>
            </form>
        </div>
    </div>
@endsection
