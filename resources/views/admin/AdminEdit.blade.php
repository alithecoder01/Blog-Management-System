@extends('layout.layout')

@section('title')
    Admin Edit
@endsection

@section('content')

    <div class="card">

        <div class="card-header">
            <div style="display: flex; justify-content: space-between;">
                <h4>Edit User</h4>
            </div>
        </div>

        <div class="card-body">

            <form action="{{ url('/AdminEdit/' .$user->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}" >
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$user->email}}" >
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <div class="checkbox">
                        
                        <Label for="User">User</Label>
                        <input type="radio" name="role" value="User" {{ $user->role == 'User' ? 'checked' : '' }}>
                        <Label for="Admin">Admin</Label>
                        <input type="radio" name="role" value="Admin" {{ $user->role == 'Admin' ? 'checked' : '' }}>
                        @error('role')
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
