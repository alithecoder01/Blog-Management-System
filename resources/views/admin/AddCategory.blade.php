@extends('layout.layout')

@section('title')
    Add Category
@endsection

@section('content')
    
    <div class="card">
        <div class="card-header">
            Add Category
        </div>
        <div class="card-body">
            <form action="{{ url('/add_category') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Category">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="btn">
                    <button type="submit" class="btn btn-primary">Add Category </button>
                </div>
            </form>
        </div>
    </div>
@endsection
