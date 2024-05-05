@extends('layout.layout')

@section('title')
    Admin Register
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success"> {{ session('success') }}</div>
    @endif

    <div class="card">

        <div class="card-header">
            <div style="display: flex; justify-content: space-between;">
                <h4>Registeration</h4>
            </div>
        </div>

        <div class="card-body">

            <form action="{{ url('/AdminRegister') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Username">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <div class="checkbox">
                        <Label for="User">User</Label>
                        <input type="radio" name="role" value="User">
                        <Label for="Admin">Admin</Label>
                        <input type="radio" name="role" value="Admin">
                    </div>
                </div>

                <div class="btn">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>

    </div>
@endsection
